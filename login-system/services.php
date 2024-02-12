<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="services.css">
  <title>Our Services</title>
  <style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      cursor: pointer;
    }

    :root {
      --color-brand-primary: #4070f4;
      --color-text-light: #555;
      --color-brand-accent-bg: #eaf5fe;
      --s1: 1.6rem;
      --s2: 2.24rem;
      --s3: 3.14rem;
      --s4: 4.4rem;
      --s5: 6.16rem;
    }

    body {
      font-size: 1.6rem;
      font-family: 'Poppins', sans-serif;
      line-height: 1.5;
      background-color: #f5f5f5;
    }

    header {
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      padding: 15px 0;
    }

    #navbar {
      text-align: center;
    }

    #main-page-link {
      text-decoration: none;
      color: #7c86f8;
      font-weight: bold;
      transition: color 0.3s;
    }

    #main-page-link:hover {
      color: #007bff;
    }

    .c-section {
      padding: 30px;
      text-align: center;
      transition: box-shadow 0.3s ease;
    }

    .c-section:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .c-section__title {
      margin-bottom:10px;
      font-size:15px;
    }

    .c-section__title span {
      color: var(--color-brand-primary);
      font-size:25px;
      text-transform: uppercase;
    }

    .c-services {
      list-style: none;
      display: grid;
      gap: var(--s3);
      grid-template-columns: repeat(3, 1fr);
      margin-top: var(--s3);
    }

    .c-services__item {
      padding: 15px;
      border-radius: 15px;
      box-shadow: 0 0 var(--s2) rgba(0, 0, 0, 0.05);
      background-color: #fff;
      transition: box-shadow 0.3s ease;
      margin: 10px;
    }

    .c-services__item:hover {
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
    }

    .c-services__item h3 {
      font-size: 20px;
      margin-bottom: var(--s2);
      color: var(--color-brand-primary);
    }

    .c-services__item p {
      font-size: 15px;
      color: var(--color-text-light);
      line-height: 1.6;
      transition: color 0.3s;
    }

    .c-services__item:hover p {
      color: var(--color-brand-primary);
    }

    footer {
      background-color: #4070f4;
      color: #fff;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    @media only screen and (max-width: 768px) {
      .c-services {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      }

      .c-services__item {
        padding: var(--s3);
      }
    }
  </style>
</head>

<body>
  <header>
    <div id="navbar">
      <a href="landing.php" id="main-page-link">Go Back To Main Page</a>
    </div>
  </header>
  <section class="c-section">
    <h2 class="c-section__title"><span>Our Services</span></h2>
    <ul class="c-services">
      <li class="c-services__item">
        <h3><a href="rescue.html">Rescue Listing</a></h3>
        <p>Our rescue listing service connects you with pets in need of loving homes, making adoption a seamless and fulfilling experience.</p>
      </li>
      <li class="c-services__item">
        <h3><a href="chatbot.html">Veteran Chatbot</a></h3>
        <p>Connect with our veteran chatbot for personalized support and guidance, tailored to meet the unique needs of those who have served.</p>
      </li>
      <li class="c-services__item">
        <h3><a href="adoption.html">Adoption Listing</a></h3>
        <p>"Discover your perfect companion in our adoption listing—where furry friends await, offering unconditional love, joy, and a forever home."</p>
      </li>
      <li class="c-services__item">
        <h3><a href="qrcode.html">Qr Tag Collar</a></h3>
        <p>Stay connected with your furry friend using our QR collar tag, ensuring their safety while enabling easy access to vital information.</p>
      </li>
      <li class="c-services__item">
        <h3><a href="donation.html">Scan & Donate</a></h3>
        <p>Make a difference effortlessly with our scan and donate feature, allowing you to support animal welfare causes with a simple scan.</p>
      </li>
      <li class="c-services__item">
        <h3><a href="pet.html">Pet Care</a></h3>
        <p>Elevate your pet care routine with our interactive platform, providing personalized guidance and resources for their health and happiness.</p>
      </li>
    </ul>
  </section>
  <footer>
    &copy; 2024 Animal Welfare Project. All rights reserved.
  </footer>
</body>

</html>
