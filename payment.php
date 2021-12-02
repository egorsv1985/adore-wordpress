<?php
/*
Template Name: payment
*/
?>
<?php get_header(); ?>

<section class="payment">
<h2 class="payment__subtitle">ОПЛАТА</h2>
		<div class="container">
		    <div class="payment__wrapper">
			 
			 <img class="payment__img" src="<?php echo IMG_DIR; ?>/payment/payment-photo.jpg" alt="payment">            
			 <h3 class="payment__title">Цена мероприятия:
			 </h3>
			 <span class="payment__discount">280 BYN</span>
			 <span class="payment__price">230 BYN</span>
				<a href="https://bezkassira.by/prednovogodnij-bal-v-chest-otkrytiya-zhenskogo-kluba-13139/buy/?placement_id=10358" class="btn">
			Оплатить
		</a>
			 
			 <ul class="payment__list">
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/apple-pay.svg" alt="apple-pay"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/maestro.svg" alt="maestro"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/belcart.svg" alt="belcart"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/mastercard.svg" alt="apple-pay"></li>
				  <li class="payment__item"><img class="payment__card" src="<?php echo IMG_DIR; ?>/payment/visa.svg" alt="visa"></li>
			 </ul>
		    </div>   
        </div>    

    </section>


<?php get_footer(); ?>