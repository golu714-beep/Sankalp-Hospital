<?php
/**
 * Lightweight doctor registry.
 *
 * Used by doctors.php (the directory listing page) to render the doctor grid.
 * Keep in sync with doctors/dr-<slug>.php — the per-doctor files are the
 * source of truth for full data (bio, long_bio, expertise), this registry
 * only holds the fields needed for the directory card.
 */

if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === '_registry.php') {
    http_response_code(404);
    exit;
}

$doctorRegistry = [
    'dr-lata-goyal' => [
        'name' => 'Dr. Lata Goyal',
        'specialty' => 'Obstetrics & Gynaecology',
        'degrees' => 'MBBS, MS (Obstetrics & Gynaecology) | Senior Consultant & IVF Specialist',
        'experience' => '15+ Years',
        'img' => 'lata-goyal.jpg',
        'filters' => ['gynecology'],
    ],
    'dr-tanay-goyal' => [
        'name' => 'Dr. Tanay Goyal',
        'specialty' => 'Orthopaedics',
        'degrees' => 'MBBS, MS (Orthopaedics) | Senior Orthopedic Surgeon',
        'experience' => '10+ Years',
        'img' => 'tanay-goyal.jpg',
        'filters' => ['orthopedics'],
    ],
    'dr-suneedh-gupta' => [
        'name' => 'Dr. Suneedh Gupta',
        'specialty' => 'Oral & Maxillofacial Surgery',
        'degrees' => 'BDS, MDS (Oral & Maxillofacial Surgery) | Consultant Oral & Maxillofacial Surgeon',
        'experience' => '10+ Years',
        'img' => 'suneedh-gupta.jpg',
        'filters' => ['dentistry', 'surgery'],
    ],
    'dr-himanshu-gupta' => [
        'name' => 'Dr. Himanshu Gupta',
        'specialty' => 'Oncology',
        'degrees' => 'MBBS, MD / DNB - Medical Oncology',
        'experience' => '10+ Years',
        'img' => 'himanshu-gupta.jpg',
        'filters' => ['oncology'],
    ],
    'dr-chandra-mukesh-dhawde' => [
        'name' => 'Dr. Chandra Mukesh Dhawde',
        'specialty' => 'General & Laparoscopic Surgery',
        'degrees' => 'MBBS, MS - Laparoscopic Surgeon',
        'experience' => '12+ Years',
        'img' => 'chandra-dhawde.jpg',
        'filters' => ['surgery'],
    ],
    'dr-sanjay-goyal' => [
        'name' => 'Dr. Sanjay Goyal',
        'specialty' => 'Ophthalmology (Senior Specialist)',
        'degrees' => 'MBBS, MS (Ophthalmology) | Founder & Senior Eye Surgeon',
        'experience' => '25+ Years',
        'img' => 'sanjay-goyal.jpg',
        'filters' => ['ophthalmology'],
    ],
    'dr-manoj-bharti' => [
        'name' => 'Dr. Manoj Bharti',
        'specialty' => 'Dentistry',
        'degrees' => 'BDS - Consultant Dentist',
        'experience' => '10+ Years',
        'img' => 'manoj-bharti.jpg',
        'filters' => ['dentistry', 'surgery'],
    ],
    'dr-nilesh-goyal' => [
        'name' => 'Dr. Nilesh Goyal',
        'specialty' => 'General & Laparoscopic Surgery',
        'degrees' => 'MBBS, MS (General Surgery) | Consultant General & Laparoscopic Surgeon',
        'experience' => '10+ Years',
        'img' => 'nilesh-goyal.jpg',
        'filters' => ['surgery'],
    ],
    'dr-ankit-sharma' => [
        'name' => 'Dr. Ankit Sharma',
        'specialty' => 'Psychiatry',
        'degrees' => 'MBBS, MD (Psychiatry) | Consultant Psychiatrist',
        'experience' => '8+ Years',
        'img' => 'ankit-sharma.jpg',
        'filters' => ['psychiatry'],
    ],
    'dr-ankita-bansal-goyal' => [
        'name' => 'Dr. Ankita Bansal Goyal',
        'specialty' => 'Obstetrics & Gynaecology',
        'degrees' => 'MD (Obstetrics & Gynaecology) - PGIMER CHD, FMAS | Consultant Laparoscopic Surgeon & Gynaecologist',
        'experience' => '8+ Years',
        'img' => 'ankita-goyal.jpg',
        'filters' => ['gynecology', 'surgery'],
    ],
    'dr-shailesh-gupta' => [
        'name' => 'Dr. Shailesh Gupta',
        'specialty' => 'Cardiology & Internal Medicine',
        'degrees' => 'MBBS, MD (Medicine) | Senior Physician & Heart Specialist',
        'experience' => '15+ Years',
        'img' => 'shailesh-gupta.jpg',
        'filters' => ['medicine'],
    ],
    'dr-usha-armo' => [
        'name' => 'Dr. Usha Armo',
        'specialty' => 'ENT (Otolaryngology)',
        'degrees' => 'MBBS, MS (ENT) | Senior ENT Consultant',
        'experience' => '12+ Years',
        'img' => 'usha-armo.jpg',
        'filters' => ['ent'],
    ],
    'dr-sukirti-chauhan' => [
        'name' => 'Dr. Sukirti Chauhan',
        'specialty' => 'Obstetrics & Gynaecology',
        'degrees' => 'MBBS, MS - Obs & Gynaecology',
        'experience' => '10+ Years',
        'img' => 'sukirti-chauhan.jpg',
        'filters' => ['gynecology'],
    ],
    'dr-megha-goyal' => [
        'name' => 'Dr. Megha Goyal',
        'specialty' => 'Neonatology & Pediatrics',
        'degrees' => 'MBBS, MD (Pediatrics) | Consultant Neonatologist',
        'experience' => '7+ Years',
        'img' => 'megha-goyal.jpg',
        'filters' => ['pediatrics'],
    ],
    'dr-akshaya-goyal' => [
        'name' => 'Dr. Akshaya Goyal',
        'specialty' => 'Ophthalmology (Eye Care)',
        'degrees' => 'MBBS, MS (Ophthalmology) | Consultant Ophthalmologist',
        'experience' => '7+ Years',
        'img' => 'akshaya-goyal.jpg',
        'filters' => ['ophthalmology'],
    ],
    'dr-akshay-gupta' => [
        'name' => 'Dr. Akshay Gupta',
        'specialty' => 'Rheumatology & Internal Medicine',
        'degrees' => 'MD (Medicine) | Consultant Physician & Rheumatologist',
        'experience' => '5+ Years',
        'img' => 'akshay-gupta.jpg',
        'filters' => ['medicine'],
    ],
    'dr-ankit-gupta' => [
        'name' => 'Dr. Ankit Gupta',
        'specialty' => 'Pediatrics',
        'degrees' => 'MBBS, DCH | Senior Consultant Pediatrician',
        'experience' => '10+ Years',
        'img' => 'ankit-gupta.jpg',
        'filters' => ['pediatrics'],
    ],
];
