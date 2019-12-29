<style>
  html {
    height: 100%;
    box-sizing: border-box;
  }

  *,
  *:before,
  *:after {
    box-sizing: inherit;
  }

  body {
    position: relative;
    margin: 0;
    padding-bottom: 6rem;
    min-height: 100%;
    font-family: "Helvetica Neue", Arial, sans-serif;
  }

  .footer {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    background-color: #efefef;
    text-align: center;
  }
</style>
<footer class="footer">
  <div class="container">
    <span class="text-muted">
      <?php
      for ($i = 1; $i <= ceil($num_series->qnt / 10); $i++) { ?>
        <div style="
    background: aqua;
    display: inline-block;
    width: 30px;
    border: 1px solid black;
    color: black;
">
          <a href="<?php echo base_url() . 'persona/page/' . $i ?>">
            <?php echo $i ?>
          </a>
        </div>
      <?php } ?></span>
  </div>
</footer>