  <div class="p-staff-fv">
    <div class="p-staff-fv__inner l-staff">
      <div class="p-staff-fv__info">
        <div class="p-staff-fv__texts">
          <h1 class="p-staff-fv__message-1"><?php the_field('staff_message_1'); ?></h1>
          <h2 class="p-staff-fv__message-2"><?php the_field('staff_message_2'); ?></h2>
        </div>
        <p class="p-staff-fv__occupation"><?php the_field('occupation'); ?></p>
        <h3 class="p-staff-fv__name"><?php the_field('staff_name'); ?></h3>
        <p class="p-staff-fv__year-of-entry"><?php the_field('year_of_entry'); ?>入社</p>
        <p class="p-staff-fv__biography"><?php the_field('biography'); ?></p>
      </div>
      <div class="p-staff-fv__thumbnail">
        <?php the_post_thumbnail('large', ['class' => 'p-staff-fv__thumbnail']); ?>
      </div>
    </div>
  </div>