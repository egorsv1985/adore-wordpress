<?php
/*
Template Name: payment
*/
?>
<?php get_header(); ?>
<section class="payment">
<h2 class="payment__subtitle">оПЛАТА</h2>
		<div class="container">
		    <div class="payment__wrapper">
			 
			 <img class="payment__img" src="<?php echo IMG_DIR; ?> ./payment/payment-photo.jpg" alt="payment">            
			 <h3 class="payment__title">Цена мероприятия:
			 </h3>
			 <span class="payment__discount">180 BYN</span>
			 <span class="payment__price">120 BYN</span>
			 <button class="btn">Оплатить</button>
			 <ul class="payment__list">
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?> ./payment/apple-pay.svg" alt="apple-pay"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?> ./payment/maestro.svg" alt="maestro"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?> ./payment/belcart.svg" alt="belcart"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?> ./payment/mastercard.svg" alt="apple-pay"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?> ./payment/visa.svg" alt="visa"></li>
			 </ul>
		    </div>   
        </div>    

    </section>
<section class="main">
        <div class="container">
        <div class="main__wrapper">
            <h2 class="main__subtitle">Предновогодний 
                бал</h2>
            <img class="main__img" src="<?php echo IMG_DIR; ?> ./main-page/main.jpg" alt="main">
            
            <h1 class="main__title">В честь открытия 
                    женского клуба “Adore”</h1>
            <time class="main__date" datetime="2021-12-12 17:00">12.12.2021</time>
            <time class="main__time" datetime="2021-12-12 17:00">17:00</time>
            <button class="main__btn">Регистрация на бал</button>
        </div>   
    </div>    

    </section> 

<?php get_footer(); ?>