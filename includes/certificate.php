<?php
  function getCode() {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    global $randomString;
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
  }
  set_error_handler("exception_error_handler");
  try {
    include 'user_check.php';
    if ($log_id == "" && $log_e == "" && $log_p == "") {
  		header("location: ../index.php");
      exit();
  	} else {
      $cert_code = $log_row['cert_code'];
      $level = $log_row['level'];
      $dt = $log_row['cert_date'];
      if ($log_row['cert_date'] == null) {
        $dt = date("Y-m-d");
      }
    }
    if (isset($_GET['name']) && isset($_GET['lang'])) {
      $name = strtoupper($_GET['name']);
      $lang = $_GET['lang'];
    } else {
      header("location: ../index.php");
      exit();
    }
    require_once('../tcpdf/tcpdf.php');
    class MYPDF extends TCPDF {
      public function Header() {
        $bMargin = $this->getBreakMargin();
        $auto_page_break = $this->AutoPageBreak;
        $this->SetAutoPageBreak(false, 0);
        $img_file = K_PATH_IMAGES.'cert-bg.jpg';
        $this->Image($img_file, 0, 0, 297, 210, '', '', '', false, 300, '', false, false, 0);
        $this->SetAutoPageBreak($auto_page_break, $bMargin);
        $this->setPageMark();
      }
    }
    $pdf = new MYPDF("L", "mm", 'A4', true, 'UTF-8', false);
    $pdf->SetCreator('SOROBAN.ONLINE');
    $pdf->SetAuthor('SOROBAN.ONLINE');
    $pdf->SetTitle('MY CERTIFICATE');
    $pdf->SetSubject('certificates');
    $pdf->SetKeywords('soroban certificate');
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
    $pdf->SetMargins(20, 25, 20);
    $pdf->SetHeaderMargin(0);
    $pdf->SetFooterMargin(0);
    $pdf->setPrintFooter(false);
    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
    if (@file_exists(dirname(__FILE__).'/lang/ara.php')) {
      require_once(dirname(__FILE__).'/lang/ara.php');
      $pdf->setLanguageArray($l);
    }
    $pdf->AddPage();
    $logo = '<img src="../images/logo.png" />';
    $pdf->Ln(20);
    $pdf->writeHTMLCell(83, 0, '', '', '', '', 0, 0, true, 'L', true,0);
    $pdf->writeHTMLCell(90, 0, '', '', $logo, '', 0, 0, true, 'C', true,0);
    $pdf->writeHTMLCell(80, 0, '', '', '', '', 0, 0, true, 'R', true,0);
    $pdf->Ln(20);
    if ($lang == "ar") {
      $txt = '<span style="color: #0000FE">شهادة تدريب</span>';
      $pdf->SetFont('yousefbkwcirclemhairy', 'BI', 40);
    }
    if ($lang == "fr") {
      $txt = '<span style="color: #0000FE">certificat</span>';
      $pdf->SetFont('cid0cs', 'BI', 30);
    }
    if ($lang == "en") {
      $txt = '<span style="color: #0000FE">certificate</span>';
      $pdf->SetFont('dejavusans', 'BI', 30);
    }
    $pdf->writeHTMLCell(0, 0, '', '', strtoupper($txt), 0, 1, 0, true, 'C', true);
    $pdf->Ln(10);
    if ($lang == "ar") {
      $txt = 'تتشرف ادارة موقع سوروبان اونلاين بمنح هذه الشهادة لـ';
      $pdf->SetFont('hacensamralt', 'BI', 30);
    }
    if ($lang == "fr") {
      $txt = 'soroban online certifie que';
      $pdf->SetFont('dejavusans', 'BI', 25);
    }
    if ($lang == "en") {
      $txt = 'soroban online certifies that';
      $pdf->SetFont('dejavusans', 'BI', 30);
    }
    $pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);
    $pdf->Ln(10);
    if (preg_match('/[أ-ي]/', $name)) {
      $pdf->SetFont('arabswell_1', 'BI', 30);
    } else {
      $pdf->SetFont('times', 'BI', 30);
    }
    $pdf->writeHTMLCell(0, 0, '', '', '<span style="color: #E4007B">'.$name.'</span>', 0, 1, 0, true, 'C', true);
    $pdf->Ln(5);
    if ($lang == "ar") {
      $txt = 'نظير انهاءه(ها) للدورة التدريبية لبرنامج سوروبان للحساب الذهني وتنمية الذكاء';
      $pdf->SetFont('hacensamralt', 'BI', 25);
    }
    if ($lang == "fr") {
      $txt = 'a completé le cours : calcul mental et développement de l\'intelligence avec succès';
      $pdf->SetFont('pdfacourier', 'BI', 20);
      $pdf->Ln(5);
    }
    if ($lang == "en") {
      $txt = 'has successefully completed the course of soroban program for mental calculation';
      $pdf->SetFont('dejavusans', 'BI', 20);
    }
    $pdf->Write(0, $txt, '', 0, 'C', true, 0, false, false, 0);
    if ($cert_code == null) {
      $cert_code = getCode();
      $update = $srbn_con->query("UPDATE `users` SET `cert_date`='$dt',cert_code='$cert_code' WHERE `id`='$log_id'");
    }
    if ($lang == 'ar') {
      $html = "<span>امضاء : صالح أفهيم</span>";
      $txt = "رمز شهادتكم هو: ".$cert_code;
      $pdf->SetFont('aealarabiya', 'BI', 10);
      $pdf->Ln(25);
    }
    if ($lang == 'fr') {
      $html = "<span>SALAH AFHIM</span>";
      $txt = "Votre code de certificat est: ".$cert_code;
      $pdf->SetFont('times', 'I', 10);
      $pdf->Ln(20);
    }
    if ($lang == 'en') {
      $html = "<span>SALAH AFHIM</span>";
      $txt = "Your certificate code is: ".$cert_code;
      $pdf->SetFont('times', 'I', 10);
      $pdf->Ln(23);
    }
    $pdf->writeHTMLCell(100, 0, '', '', $dt, '', 0, 0, true, 'C', true,0);
    $pdf->setCellPaddings(0, 10, 0, 0);
    $pdf->writeHTMLCell(60, 0, '', '', $txt, '', 0, 0, true, 'C', true,0);
    $pdf->setCellPaddings(0, 0, 0, 0);
    $pdf->writeHTMLCell(100, 0, '', '', $html, '', 0, 0, true, 'C', true,0);
    $pdf->output('name.pdf', 'D');
  } catch (\Exception $e) {
    echo $e->getMessage();
  }
