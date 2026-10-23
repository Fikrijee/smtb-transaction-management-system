<template>
  <div class="about container">
    <div class="content">
      <div class="image-container">
        <img src="../assets/cardImage2.jpg" alt="card" class="image">
      </div>
      <div class="text">
        <h1 class="page-header" style="color: #004080; ">Rreth Nesh</h1>
        <p>
          Sistemi i Menaxhimit të Transaksioneve Bankare (SMTB) është një platformë e avancuar e menaxhimit të transaksioneve që siguron një mënyrë të sigurt dhe efikase për të menaxhuar transaksionet bankare.
        </p>
        <p>
          Ne jemi këtu për të ofruar një përvojë të shkëlqyeshme të menaxhimit të transaksioneve bankare dhe për të siguruar që të gjitha transaksionet tuaja të jenë të sigurta dhe të përpunuara me sukses.
        </p>
        <div class="social-media">
          <a href="#Facebook" class="social-icon"><img src="../assets/facebook.png" alt="Facebook"></a>
          <a href="#x" class="social-icon"><img src="../assets/x.png" alt="x"></a>
          <a href="#Instagram" class="social-icon"><img src="../assets/instagram.png" alt="Instagram"></a>
          <a href="#LinkedIn" class="social-icon"><img src="../assets/linkedin.png" alt="LinkedIn"></a>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');

.about {
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px 20px;
  background-color: #f0f4f8;
  height: 100vh;
  box-sizing: border-box;
  font-family: 'Roboto', sans-serif;
}

.content {
  display: flex;
  flex-direction: row;
  background: #ffffff;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
  overflow: hidden;
  width: 80%;
  max-width: 900px;
  transition: box-shadow 0.3s ease;
}

.content:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.image-container {
  flex: 1;
  overflow: hidden;
}

.image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.text {
  flex: 1;
  padding: 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

.page-header {
  font-weight: 700;
  font-size: 2.2em;
  margin-top: 0;
  /* color: #004080; */
  margin-bottom: 20px;
}

p {
  font-size: 1em;
  line-height: 1.6;
  color: #666666;
  margin-bottom: 20px;
}

.social-media {
  display: flex;
  align-items: center;
  margin-top: 20px;
}

.social-icon {
  margin-right: 15px;
  transition: transform 0.3s ease, filter 0.3s ease;
}

.social-icon img {
  width: 30px;
  height: 30px;
  filter: grayscale(65%);
}

.social-icon:hover img {
  transform: scale(1.1);
  filter: grayscale(0);
}

.social-icon:last-child {
  margin-right: 0;
}
</style>
