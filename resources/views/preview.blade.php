<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EuroZone Education – Service Agreement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      background: #e0e0e0;
      font-family: 'Open Sans', Arial, sans-serif;
      font-size: 8.5pt;
      color: #000;
      display: flex;
      justify-content: center;
      padding: 20px 0;
    }

    .a4-page {
      width: 210mm;
      min-height: 297mm;
      background: #fff;
      padding: 0px;
      box-shadow: 0 2px 16px rgba(0,0,0,0.18);
    }

    /* ── HEADER ── */
    .header-row {
      /* display: flex;
      align-items: center;
      justify-content: space-between; */
      margin-bottom: 4px;
      background-color: #f1f2f8;
      border-top: 10px solid #08337f;
    }

    .logo-wrap {
      display: flex;
      align-items: center;
      gap: 7px;
    }

    /* Logo square with red triangle corner */
    .logo-box {
      width: 46px;
      height: 46px;
      border: 2px solid #000;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20pt;
      font-weight: 900;
      color: #000;
      position: relative;
      overflow: hidden;
    }

    .logo-box::after {
      content: '';
      position: absolute;
      top: 0; right: 0;
      width: 0; height: 0;
      border-style: solid;
      border-width: 0 16px 16px 0;
      border-color: transparent #cc0000 transparent transparent;
    }

    .logo-brand .top {
      font-size: 13pt;
      font-weight: 700;
      display: block;
      letter-spacing: 0.5px;
    }

    .logo-brand .bottom {
      font-size: 7pt;
      display: block;
      letter-spacing: 2.5px;
      text-transform: uppercase;
    }

    .doc-title {
      font-size: 18pt;
      font-weight: 700;
      text-decoration: underline;
    }

    hr.divider {
      border: none;
      border-top: 1.5px solid #000;
      margin: 5px 0 6px 0;
    }

    /* ── APPLICANT BOX ── */
    .applicant-box {
      border: 1px solid #000;
      padding: 6px 8px;
      margin-bottom: 6px;
      border-radius: 15px;
    }

    .box-heading {
      font-weight: 700;
      font-size: 8.5pt;
      margin-bottom: 5px;
    }

    .field-row {
      display: flex;
      align-items: flex-end;
      gap: 4px;
      margin-bottom: 15px;
    }

    .field-label {
      font-size: 8.5pt;
      white-space: nowrap;
    }

    .field-line {
      flex: 1;
      border-bottom: 1px solid #000;
      padding-left: 10px;
    }

    /* ── SERVICE DETAILS ── */
    .service-details {
      border: 1px solid #000;
      padding: 7px 9px;
      margin-bottom: 6px;
      font-size: 8.3pt;
      line-height: 1.6;
      border-radius: 15px;
    }

    /* ── TERMS BOX ── */
    .tnc-box {
      border: 1px solid #000;
      padding: 6px 9px;
      margin-bottom: 6px;
      border-radius: 10px;
    }

    .tnc-title {
      text-align: center;
      font-weight: 700;
      font-size: 9pt;
      text-decoration: underline;
      margin-bottom: 4px;
    }

    .tnc-list {
      padding-left: 14px;
      margin: 0;
    }

    .tnc-list li {
      font-size: 7.7pt;
      line-height: 1.42;
      margin-bottom: 2.5px;
    }

    /* ── BOTTOM GRID ── */
    .bottom-grid {
      display: grid;
      grid-template-columns: 0.5fr 1fr;
      border: 1px solid #000;
      margin-bottom: 5px;
      border-radius: 10px;
    }

    .sign-col {
      border-right: 1px solid #000;
      padding: 7px 8px;
    }

    .office-col {
      padding: 7px 8px;
    }

    .office-col-title {
      font-weight: 700;
      font-size: 8.5pt;
      text-align: center;
      margin-bottom: 6px;
    }

    .checkbox-line {
      display: flex;
      align-items: flex-start;
      gap: 5px;
      font-size: 8pt;
      margin-bottom: 7px;
      line-height: 1.35;
      border-bottom: 1px solid black;
      height: 44px;
    }

    .checkbox-line input[type="checkbox"] {
      margin-top: 2px;
      flex-shrink: 0;
    }

    .sign-field { margin-bottom: 10px; }

    .sign-label {
      font-weight: 700;
      font-size: 8.3pt;
      margin-bottom: 2px;
    }

    .sign-line {
      border-bottom: 1px solid #000;
    }

    .meta-row {
      display: flex;
      align-items: flex-end;
      gap: 4px;
      margin-bottom: 4px;
      font-size: 8pt;
    }

    /* .meta-line { flex: 1; border-bottom: 1px solid #000; height: 14px; } */

    /* ── FOOTER ── */
    .footer-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      border-bottom: 10px solid #08337f;
      padding-top: 5px;
      gap: 4px;
      background-color: #f1f2f8;
      text-align: center;
    }

    .fc-country {
      font-weight: 700;
      font-size: 8.3pt;
      margin-bottom: 2px;
    }

    .footer-col p {
      font-size: 7pt;
      line-height: 1.45;
      margin: 0;
    }

    @media print {
      body { background: none; padding: 0; }
      .a4-page { box-shadow: none; }
    }
  </style>
</head>
<body>
<div class="a4-page">

  <!-- HEADER -->
  <div class="header-row px-4 py-3">
    <nav class="navbar  p-0">
  <div class="container-fluid position-relative d-flex align-items-center p-0">

    <!-- Left logo -->
    <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/images/EuroZone.png') }}" alt="Logo" width="145" height="48">
    </a>

    <!-- Center text -->
    <div class="position-absolute start-50 translate-middle-x">
      <span class="fw-bold h5 text-decoration-underline">Service Agreement</span>
    </div>

  </div>
</nav>
  </div>

  <!-- APPLICANT INFO -->
  <div class="applicant-box mx-4">
    <div class="box-heading">Applicant(s) information:</div>
    <div class="field-row">
      <span class="field-label">Name</span>
      <div class="field-line">{{ $data['name'] }}</div>
      <span class="field-label">Passport/ NID</span>
      <div class="field-line">{{ $data['passport'] }}</div>
    </div>
    <div class="field-row">
      <span class="field-label">Email</span>
      <div class="field-line">{{ $data['email'] }}</div>
      <span class="field-label">Phone</span>
      <div class="field-line">{{ $data['phone'] }}</div>
    </div>
    <div class="field-row">
      <span class="field-label">Contact/Present Address</span>
      <div class="field-line" style="flex:4;"> {{ $data['service'] }}</div>
    </div>
  </div>

  <!-- SERVICE DETAILS -->
  <div class="service-details mx-4">
    <?php
// Get selected services from form
$services = $_POST['service'] ?? [];
$term = $_POST['term'] ?? [];

// If only one checkbox selected, convert to array
if (!is_array($services)) {
    $services = [$services];
}
if (!is_array($term)) {
    $term = [$term];
}

// Function for red color
function highlight($text, $condition) {
    return $condition
        ? "<span style='color:red; font-weight:bold;'>$text</span>"
        : $text;
}
?>

<div>
    <b>Service</b> - 

    <?= highlight(
        'Admission',
        in_array('AdmissionTrue', $services)
    ); ?>

    |

    <?= highlight(
        'Residence Permit/Visa',
        in_array('RpTrue', $services)
    ); ?>

    |

    <?= highlight(
        'A to Z Processing (Admission + Visa)',
        in_array('AzTrue', $services)
    ); ?>

</div>
    <div><b>Country</b> - <b>Finland</b> | Sweden | Denmark | Belgium | Netherlands | Austria | Estonia | Latvia | Lithuania</div>
    
    
    <div>
    <b>Term</b> - 

    <?= highlight(
        'Autumn 2026',
        in_array('a26', $term)
    ); ?>

    |

    <?= highlight(
        'Spring 2027',
        in_array('s27', $term)
    ); ?>

    |

    <?= highlight(
        'Autumn 2027',
        in_array('a27', $term)
    ); ?>

</div>
<div><b>Applicants</b> -  {{ implode(', ', $data['applicants'] ?? []) }} </div>
    <div><b>Total Service Charge</b> - 200,000 BDT</div>
    <div><b>Registration fee (non-refundable)</b> - 10,000 BDT</div>
    <div><b>Service charge to be paid later</b> - 190,000 BDT</div>
    <div><b>Payment condition</b> - When the service is fulfilled (admission offer received/Visa, RP, TRP positive decision received)</div>
  </div>

  <!-- TERMS AND CONDITIONS -->
  <div class="tnc-box mx-4">
    <div class="tnc-title">Terms and Conditions</div>
    <ul class="tnc-list">
      <li>The person mentioned above has agreed to take EuroZone Education's service for admission and/or visa processing.</li>
      <li>The Service period is valid for two consecutive semesters/one year.</li>
      <li>As a policy, we don't provide any guarantee to admission or positive visa approval, rather we try our best to ensure both.</li>
      <li>When the agreed service is fulfilled (e.g. upon receiving admission/visa/both, whichever the agreement is for), <b>remaining service charge shall be paid in full, within the next 07 (seven) days. No exception shall be made on payment amount or condition.</b></li>
      <li>No service payment is needed if visa application is rejected. In case the applicant launches an appeal and receives a positive decision later, the service charge and the payment liability shall prevail.</li>
      <li>Failure to fulfil the payment might lead to serious legal consequences, both in the destination country/in Bangladesh/the country where the document has been signed.</li>
      <li>If the student agrees to take 'admission and residence permit' service (for Finland only) and afterwards decides not to proceed with the RP application after getting the offer letter, he/she shall compensate EuroZone Education an amount of €800/৳80,000.</li>
      <li>After the embassy visit, the VFS Slip/equivalent must be submitted to EuroZone Education within 7 days of interview. Failure to do so will lead to cancelling the visa application.</li>
      <li>EuroZone Education reserves the right to publish the information upon applicant's offer letter and/or visa across its social media channels.</li>
      <li>EuroZone Education reserves the right to make changes to the procedure and process of the service if and when deemed necessary.</li>
      <li>EuroZone Education reserves the right to cancel/stop service of an applicant at any moment if there arise such compelling reasons.</li>
      <li>EuroZone Education shall only communicate with the person/student who has signed this agreement in terms of all the communication and payment related matters. EuroZone Education, by policy, shall not allow any communication by parents/guardians or such, regarding processing of the services.</li>
    </ul>
  </div>

  <!-- SIGNATURE + OFFICE USE -->
  <div class="bottom-grid mx-4">
    <div class="sign-col">
      <div class="checkbox-line">
        <input type="checkbox">
        <span>I have read and agreed to the above terms and conditions.</span>
      </div>
      <div class="sign-field">
        <div class="sign-label">Name</div>
        <div class="sign-line" style="height:55px;"></div>
      </div>
      <div class="sign-field">
        <div class="sign-label">Signature</div>
        <div class="sign-line" style="height:60px;"></div>
      </div>
      <div class="meta-row">
        <span>Date:</span>
        <div class="meta-line">22/04/2026</div>
      </div>
      <div class="meta-row">
        <span>Place: Bangladesh Office</span>
      </div>
      <div class="meta-row">
        <span>Office Rep.: Ovi</span>
        <div class="meta-line"></div>
      </div>
    </div>
    <div class="office-col">
      <div class="office-col-title text-decoration-underline fst-italic">Office Use Only</div>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer-grid px-4 py-2">
    <div class="footer-col">
      <div class="fc-country">Finland</div>
      <p>Näyttelijäntie 14, 00400<br>Helsinki, Finland.<br>Business ID: 3283658-2</p>
    </div>
    <div class="footer-col">
      <div class="fc-country">Bangladesh</div>
      <p>38, Sophia Villa, Garb-E-Newaz Avenue,<br>Sector 11, Uttara, Dhaka, Bangladesh<br>License No: TRAD/DSCC/025241/2023</p>
    </div>
    <div class="footer-col">
      <div class="fc-country">Phone</div>
      <p>+8801328904340<br>+8801326724613<br>+358478361308</p>
    </div>
    <div class="footer-col">
      <div class="fc-country">Web/Email</div>
      <p>eurozone.bangladesh@gmail.com<br>www.eurozoneducation.com</p>
    </div>
  </div>
 <div class="d-grid">
    <form action="{{ route('download') }}" method="GET">
    <input type="hidden" name="name" value="{{ $data['name'] }}">
    <input type="hidden" name="passport" value="{{ $data['passport'] }}">
    <input type="hidden" name="email" value="{{ $data['email'] }}">
    <input type="hidden" name="phone" value="{{ $data['phone'] }}">
    <input type="hidden" name="service" value="{{ $data['service'] }}">
    <input type="hidden" name="term" value="{{ $data['term'] }}">
    <input type="hidden" name="applicants[]" value="{{ implode('+ ', $data['applicants'] ?? []) }} ">
    <!-- Sevice Agreement -->
     
     <!-- Service Agreement -->
    <button class="btn btn-success">Download PDF</button>
</form>
  
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
