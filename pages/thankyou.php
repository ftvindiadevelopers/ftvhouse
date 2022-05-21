<!DOCTYPE html>
<html lang="en">

<head>
  <?php include "include/head.php"; ?>
  <title>FTV Cruise| Thank you</title>
</head>

<style>
  .thankyou {
    height: 100vh;
    width: 100vw;
    background: -o-linear-gradient(top, #000000 0%, #3a3a3a 100%);
    background: -webkit-gradient(linear, left top, left bottom, from(#000000), to(#3a3a3a));
    background: linear-gradient(to bottom, #000000 0%, #3a3a3a 100%);
    color: #fff;
    position: relative;
    overflow: hidden;
  }

  .thankyou .check-icon {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    opacity: .2;
    text-align: center;
  }

  .thankyou .check-icon .fa-check {
    color: #000000;
    font-size: 70vw;
  }

  .section__thankyou {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    height: 100%;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-left: 15px;
    padding-right: 15px;
    text-align: center;
    position: relative;
  }

  .section__thankyou h1 {
    font-size: 4.5rem;
    text-transform: uppercase;
  }

  .section__thankyou p {
    font-size: 1.2rem;
    margin: 30px 0;
    word-break: break-word;
  }

  .section__thankyou .redirect-link-div {
    margin: 30px 0;
  }

  a,
  a:hover {
    color: inherit;
    text-decoration: none;
    outline: none;
  }
</style>

<body>
  <main class="thankyou">
    <div class="check-icon"><span><i class="fas fa-check"></i></span></div>
    <div class="section__thankyou">
      <h1>Thank You</h1>
      <p>Thank you for getting in touch. Our business executives will reach out to you soon.</p>
      <div class="redirect-link-div">
        <a href="/" class="redirect-link" title="Go To Home">Go To Home</a>
      </div>
    </div>
  </main>
</body>

</html>