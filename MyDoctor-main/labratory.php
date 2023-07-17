<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyDoctor - Laboratory</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #1f85c7;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
      font-size: 28px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .lab-item {
      margin-bottom: 40px;
      display: flex;
      align-items: center;
    }

    .lab-item img {
      width: 200px;
      margin-right: 20px;
      border-radius: 5px;
    }

    .lab-item .info {
      flex: 1;
    }

    .lab-item h2 {
      font-size: 24px;
      margin: 0;
    }

    .lab-item p {
      margin: 10px 0;
    }

    @media (max-width: 768px) {
      .lab-item {
        flex-direction: column;
        align-items: flex-start;
      }

      .lab-item img {
        margin-bottom: 20px;
      }
    }
  </style>
</head>

<body>
  <header>
    <h1>MyDoctor - Laboratory</h1>
  </header>

  <div class="container">
    <div class="lab-item">
      <img src="image/microbiologist-doctor-taking-blood-sample-tube-from-rack-with-machines-analysis-lab-background.jpg" alt="Laboratory 1">
      <div class="info">
        <h2>Medical Imaging Lab</h2>
        <p>Nestled within the doctor's lab is a vibrant space dedicated to the intricate world of molecular biology. This lab pulsates with the rhythmic hum of state-of-the-art gene sequencers, polymerase chain reaction machines, and microarray scanners. Expert scientists clad in white lab coats and armed with pipettes and test tubes work diligently at their lab benches, unraveling the secrets of life at the molecular level.</p>
        
      </div>
    </div>

    <div class="lab-item">
      <img src="image/medium-shot-woman-looking-through-microscope.jpg" alt="Laboratory 2">
      <div class="info">
        <h2>Biochemistry Lab</h2>
        <p>At the heart of the doctor's lab, a dimly lit room houses the captivating realm of medical imaging. It is a sanctuary where advanced technologies blend with the artistry of visualizing the human body in exquisite detail. Here, cutting-edge equipment like MRI scanners, CT scanners, and ultrasound machines take center stage, empowering physicians and researchers to peer beneath the surface and unravel the mysteries hidden within.</p>
        
      </div>
    </div>

    <div class="lab-item">
      <img src="image/scientist-modern-equipped-medical-laboratory-examinining-drug-discovery-with-micropipette-medical-stuff-examining-vaccine-evolution-using-high-tech-technology-researching-treatment-developmen.jpg" alt="Laboratory 3">
      <div class="info">
        <h2>Molecular Biology Lab</h2>
        <p>Adjacent to the molecular biology lab lies the biochemistry laboratory, a realm dedicated to unraveling the chemical intricacies of life. Here, a symphony of whirring centrifuges, spectrometers, and chromatography systems orchestrates a meticulous exploration of biomolecules and their interactions. The lab resonates with the fragrance of reagents and the balletic movements of researchers carefully manipulating samples.</p>
        
      </div>
    </div>

    <!-- Add more lab items as needed -->

  </div>
</body>

</html>
