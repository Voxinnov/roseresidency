 <?php 
$this->load->view('layouts/header');
?>  
<style>
    table
{
  border: 1px solid #7D6941;
  border-radius: 10px;
  width: 100%;
}
thead
{
  background-color: #7D6941;
  text-align: left;
}
table tbody tr td
{
  padding: 9px 10px;
  border: none;
}
table thead tr th, table tfoot tr td
{
  padding: 8px 10px 9px;
  font-size: 14px;
  font-weight: bold;
  color: #fff;
}
</style>
 <main>
      <div class="hero small-height jarallax" data-jarallax data-speed="0.2">
          <img class="jarallax-img" src="<?php echo base_url(); ?>template/img/rrslider.jpg" alt="">
          <div class="wrapper opacity-mask d-flex align-items-center justify-content-center text-center animate_hero" data-opacity-mask="rgba(0, 0, 0, 0.5)">
              <div class="container">
                  <small class="slide-animated one">Luxury Hotel Experience</small>
                  <h1 class="slide-animated two">Travellers Inn Tariff</h1>
              </div>
          </div>
      </div>
      <!-- /Background Img Parallax -->

      <div class="container margin_120_95">
          <div class="row justify-content-between align-items-center">
              <div class="col-lg-12">
             
              <table >
                                                    <thead>
                                                        <th class="white">Room Type (Per room per night)</th>
                                                        <th class="white">Single(Rs)*</th>
                                                        <th class="white">Double(Rs)*</th>                                                       
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Executive Room</td>
                                                            <td>₹ 1500</td>
                                                            <td>₹ 2000</td>                                                            
                                                        </tr>
                                                        <tr class="dark">
                                                            <td>Deluxe Room</td>
                                                            <td>₹ 1850</td>
                                                            <td>₹ 2150</td>                                                            
                                                        </tr>
                                                      
                                                        <tr class="dark">
                                                            <td>Extra Bed</td>
                                                            <td>₹ 500</td>
                                                            <td></td>                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                * Govt Taxes as applicable<br>
                                                * 24 hours check out time
              </div>
             
          </div>
          <!-- /Row -->
      </div>
      <!-- /container -->

      <!-- /bg_white -->

  </main>

         <?php 
$this->load->view('layouts/footer');
?> 
