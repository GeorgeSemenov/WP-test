<?php get_header()?>
<?php /**Template Name: "contactus" */ ?>
<main><div class="page-title"><h3 class="page-title__header main-content-frames">Contact Us</h3><p class="page-title__description main-content-frames">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p></div><div class="contact-us-screen main-content-frames contact-us-screen_add_mb"><div class="contact-us contact-us-screen__contact-us"><img class="contact-us__img" width="300" height="181" src="./images/buisness-woman.png" alt="buisness-woman"><div class="contact-us__contacts-list-container"><h2 class="contact-us__list-header">ADDRESS</h2><ul class="contact-us__contacts-list"><li class="contact-us__list-item"><?php echo get_post_meta(get_the_ID(), 'adressuperniga' , true); ?></li></ul></div><div class="contact-us__contacts-list-container contact-us__contacts-list-container_phones"><h2 class="contact-us__list-header">PHONE</h2><ul class="contact-us__contacts-list"><li class="contact-us__list-item contact-us__list-item_phone">+62-812-7313-4321</li><li class="contact-us__list-item contact-us__list-item_phone">+62-817-000-1234</li></ul></div><div class="contact-us__contacts-list-container contact-us__contacts-list-container_services"><h2 class="contact-us__list-header">ONLINE SERVICE</h2><ul class="contact-us__contacts-list">
  <?php
  $posts = get_posts( array(
    'numberposts' => -1,
    'category'    => 0,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  =>'',
    'post_type'   => 'contact',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
  ) );

  foreach( $posts as $post ){
    setup_postdata($post);
    ?>
      <li class="contact-us__list-item contact-us__list-item_service"><?php the_title(); ?></li>
    <?php 
  }
  wp_reset_postdata(); // сброс
  ?>
</ul></div></div><form class="sending-form contact-us-screen__sending-form"><h2 class="sending-form__header">SEND US MESSAGE</h2><div class="sending-form__input-container"><label class="sending-form__label" for="customer-name">Full Name</label> <input class="sending-form__input" placeholder="Your Name" id="customer-name"></div><div class="sending-form__input-container"><label class="sending-form__label" for="customer-email">Email</label> <input class="sending-form__input" placeholder="Your Email" type="email" id="customer-email"></div><div class="sending-form__text-area-container"><label class="sending-form__label" for="customer-proposal">Message</label> <textarea class="sending-form__text-area" placeholder="Your Message" rows="7" id="customer-proposal" name="nameTA"></textarea></div><button class="link sending-form__link link_theme_button link_py_big" type="submit">SUBMIT</button></form></div><div class="map-container-screen main-content-frames map-container-screen_add_mb"><iframe class="map-container-screen__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16631.7315585192!2d49.680477446429606!3d58.59608536975268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43fcf43acf307843%3A0x1648bca917d442bd!2z0JDQstGC0L7QvNC-0LnQutCwINCb0LXQvdC40L3QsCAxMDY!5e0!3m2!1sru!2sru!4v1618574726663!5m2!1sru!2sru" width="940" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div></main><?php get_footer()?></body></html>