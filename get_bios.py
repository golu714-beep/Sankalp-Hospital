import urllib.request
import re
import json

slugs = [
    'dr-lata-goyal', 'dr-tanay-goyal', 'dr-suneedh-gupta', 'dr-sanjay-goyal', 'dr-nilesh-goyal',
    'dr-ankit-sharma', 'dr-ankita-bansal-goyal', 'dr-shailesh-gupta', 'dr-usha-armo',
    'dr-megha-goyal', 'dr-akshaya-goyal', 'dr-akshay-gupta', 'dr-ankit-gupta', 'dr-rimsha-lakesh-sahu'
]

for slug in slugs:
    try:
        req = urllib.request.Request(f'https://www.sankalphospital.com/doctors/{slug}', headers={'User-Agent': 'Mozilla/5.0'})
        html = urllib.request.urlopen(req).read().decode('utf-8')
        doc_content_match = re.search(r'<div class="doc-content">(.*?)</div>\s*</div>\s*<div class="col-lg-5">', html, re.DOTALL)
        if not doc_content_match:
            doc_content_match = re.search(r'<div class="doc-content">(.*?)</div>', html, re.DOTALL)
        
        if doc_content_match:
            content = doc_content_match.group(1)
            h2s = list(re.finditer(r'<h2[^>]*>(.*?)</h2>', content))
            if h2s:
                last_h2 = h2s[-1]
                after_h2 = content[last_h2.end():]
                paragraphs = re.findall(r'<p>(.*?)</p>', after_h2, re.DOTALL)
                clean_p = []
                for p in paragraphs:
                    p_clean = re.sub(r'<[^>]+>', "", p).strip()
                    p_clean = p_clean.replace('&nbsp;', ' ').replace('&amp;', '&').replace('&quot;', '"').replace('&#39;', "'")
                    if p_clean and 'Consultation Hours:' not in p_clean and 'OPD Timings:' not in p_clean:
                        clean_p.append(p_clean)
                bio = ' '.join(clean_p)
                print(f"{slug} -> {bio[:120]}...")
            else:
                print(f"{slug} -> No H2s")
        else:
            print(f"{slug} -> No doc-content")
    except Exception as e:
        print(f"{slug} -> Error: {e}")
