<style type="text/css">
  footer{
  position: bottom;
  bottom: 0px;
  width: 100%;
  margin-bottom: 10px;
  background: #111;
}
.main-content{
  display: flex;
}
.main-content .box{
  flex-basis: 50%;
  padding: 10px 20px;
}
.box h2{
  font-size: 1.125rem;
  font-weight: 600;
  color: white;
  text-transform: uppercase;
}
.box .content{
  margin: 20px 0 0 0;
  position: relative;
  color: silver;
}
.box .content:before{
  position: absolute;
  content: '';
  top: -10px;
  height: 2px;
  width: 100%;
  background: #1a1a1a;
}
.box .content:after{
  position: absolute;
  content: '';
  height: 2px;
  width: 15%;
  background: #f12020;
  top: -10px;
}
.left .content p{
  text-align: justify;
}
.left .content .social{
  font-size: 25px;
  margin: 20px 0 0 0;
}
.left .content .social a{
  padding: 0 8px;
}
.left .content .social a span{
  height: 40px;
  width: 40px;
  background: #1a1a1a;
  line-height: 40px;
  text-align: center;
  font-size: 18px;
  border-radius: 5px;
  transition: 0.3s;
}
.left .content .social a span:hover{
  background: #f12020;
}
.center .content{
  font-size: 15px;
}
.center .content .fas{
  font-size: 1.9375rem;
  background: #1a1a1a;
  height: 45px;
  width: 45px;
  line-height: 45px;
  text-align: center;
  border-radius: 50%;
  transition: 0.3s;
  cursor: pointer;
}
.center .content .fas:hover{
  background: #f12020;
}
.center .content .text{
  font-size: 1.3725rem;
  font-weight: 500;
  padding-left: 10px;
}
.center .content .phone{
  margin: 15px 0;
}
.right form .text{
  font-size: 1.6625rem;
  margin-bottom: 2px;
  color: #white;
}
.right form .msg{
  color: white;
  margin-top: 10px;
}
.right form input, .right form .msgForm{
  width: 100%;
  font-size: 1.0625rem;
  background: #151515;
  padding-left: 10px;
  border: 1px solid #222222;
}
.right form input:focus,
.right form .msgForm:focus{
  outline-color: #3498db;
}
.right form input{
  height: 35px;
}
.right form .btn{
  margin-top: 10px;
  width: 100%;
}
.right form .btn button{
  height: 40px;
  width: 100%;
  border: none;
  outline: none;
  background: #f12020;
  font-size: 1.0625rem;
  font-weight: 500;
  cursor: pointer;
  transition: .3s;
}
.right form .btn button:hover{
  background: #000;
}
.bottom center{
  
  padding: 5px;
  font-size: 1.1375rem;
  background: #151515;
}
.bottom center span{
  color: white;
}
.bottom center a{
  color: #f12020;
  text-decoration: none;
}
.bottom center a:hover{
  text-decoration: underline;
}
@media screen and (max-width: 900px) {
  footer{
    position: relative;
    bottom: 0px;
  }
  .main-content{
    flex-wrap: wrap;
    flex-direction: column;
  }
  .main-content .box{
    margin: 5px 0;
  }
  .right form .text{
  margin-left: : 10px;
  }
  .right form .msg{
  margin-left: : 10px;
}
</style>
<link rel="stylesheet" href="style.css">
<script src="fontawesome/js/all.min.js"></script>
<footer>
      <div class="main-content">
        <div class="left box">
          <h2>Tentang Kami</h2>
          <div class="content">
            <p>CodinNepal is a YouTube channel where you can learn web designing, web development, ui/ux designing, html css tutorial, hover animation and effects, javascript and jquery tutorial and related so on.</p>
            <div class="social">
              <a href="https://facebook"><span class="fab fa-facebook-f"></span></a>
              <a href="https://wa.me/+6282272119028"data="Saya Tertarik Dengan Produk Di Sini"><span class="fa-brands fa-whatsapp"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com/"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>
        <div class="center box">
          <h2>Alamat</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">USU, Teknik Informatika</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+088888888</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <a class="text"href="gunawansitumorang01@gmail.com">gunawansitumorang01@gmail.com</a>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Kontak Kami</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Pesan *</div>
                <textarea id=".msgForm" rows="2" cols="25" required></textarea><br>
              <div class="btn">
                <button class="btn btn-success" type="submit">Kirim</button>
              </div>
            </form>
          </div>
          <div class="bottom">
          <center>
            <span class="credit">Created By <a href="">Gunawan, Audra</a> </span>
            <span class="far fa-copyright"></span> 2022.
          </center>
        </div>
        
     