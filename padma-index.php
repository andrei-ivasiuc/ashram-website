<style>
  .blink {
    animation: blink 10s infinite;
  }

  @keyframes blink {
    0% {
      opacity: 1;
    }

    50% {
      opacity: 0;
      transform: scale(2);
    }

    51% {
      opacity: 0;
      transform: scale(0);
    }

    100% {
      transform: scale(1);
      opacity: 1;
    }
  }
</style>
<!-- ./events/ashram-foundation/ -->
<div class="row">
  <!-- <div style="text-align:center; background-color: #b8c81a">
    <a href="./events/aurobindo-arrival/4th April 2022.pdf" style="text-decoration: none; font-weight: 600; padding: 10px; display: block; color: #282c05;">
      See the Program schedule for Anniversary of Sri Aurobindo's coming to Pondicherry on 4/4/2022
    </a>
  </div> -->
  <div class="col-md-4" style="text-align:center; background-color:#7d5a09">
    <a href="tara-padmashri.php" style="text-decoration: none; font-weight: 600;  padding: 10px; display: block; color: #fff;">
      The President confers <b>Padma Sri</b> to Tara Didi on 21st March 2022, click here to know more
    </a>
  </div>
  <?php
  $prog1 = strtotime(date('Y-m-d', strtotime('2022-04-24')));
  $prog1 = strtotime(date('Y-m-d', strtotime('2022-04-25')));

  $currentDate = strtotime(date('Y-m-d'));
  if ($prog1 >= $currentDate) {  ?>
    <div class="col-md-4" style="text-align:center; background-color:#f0ba56">
      <a href="./events/mother-final-arrival/24th April 2022.pdf" target="_blank" style="text-decoration: none; font-weight: 600; padding: 10px; display: block; color: #453e31;">
        Click here to see Program for Mother's final arrival in Puducherry on 24/4/2022
      </a>
    <?php } else { ?>
      <div class="col-md-4" style="text-align:center; background-color:#968042">
        <a href="./events-past.php" target="_blank" style="text-decoration: none; font-weight: 600; padding: 10px; display: block; color: #fff;">
          Click here to see the recent Events / Workshops held in Delhi Ashram
        </a>
      <?php } ?>
      </div>

      <div class="col-md-4" style="text-align:center; background-color: #7d5a09">
        <a href="./events" style="text-decoration: none; font-weight: 600; padding: 10px; display: block; color: #fff;">
          Scroll below to see the upcoming Programmes; you can also click on Events in Programs menu
        </a>
      </div>

    </div>