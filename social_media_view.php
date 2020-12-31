<div class="mains">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="header-title">
        Marketing &amp; Social Media
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="">Marketing &amp; Social Media</li>
        <li class="header-title">Social media</li>
      </ol>
    </section>

    <!-- setup modal -->
    <div class="modal fade" id="setup-social-modal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <div class="modal-title">
              <h4>Setup profile</h4>
            </div>
          </div>
          <div class="modal-body">
            <div class="social__container">
              <div onclick='attachUri("https://www.tripadvisor.com/", "face Advisor")' class="social__container--item">
                <img draggable="false" src="<?php echo base_url('images/tripadvisor.svg') ?>" class="social__container--img" alt="Tripadvisor">
              </div>
              <div onclick='attachUri("https://facebook.com", "Facebook")' class="social__container--item">
                <img draggable="false" src="<?php echo base_url('images/facebook.svg') ?>" class="social__container--img" alt="Facebook">
              </div>
              <div onclick='attachUri("https://pinterest.com", "Pinterest")' class="social__container--item">
                <img draggable="false" src="<?php echo base_url('images/pinterest.svg') ?>" class="social__container--img" alt="Pinterest">
              </div>
              <div onclick='attachUri("https://instagram.com", "Instagram")' class="social__container--item">
                <img draggable="false" src="<?php echo base_url('images/instagram.svg') ?>" class="social__container--img" alt="Instagram">
              </div>
              <div onclick='attachUri("https://twitter.com", "Twitter")' class="social__container--item">
                <img draggable="false" src="<?php echo base_url('images/twitter.svg') ?>" class="social__container--img" alt="Twitter">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn bg-red">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Sub Menu -->
    <section class="content">

      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <div class="box box-solid">
                <div class="box-header bg-teal">
                  <h3 class="box-title">Social media</h3>
                  <div class="box-tools pull-right">
                    <a href="" class="btn bg-green pull-right">Print</a>
                    <a href="" class="btn bg-green pull-right mr-5">Export</a>
                    <a id="setupSocialBtn" href="#/setup" class="btn bg-green pull-right mr-5">Setup</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Form for filtering -->
          <div class="row mb-20">
            <div class="col-md-12">
              <div class="col-md-12 p-0 bg-gray-light p-10 pb-0">
                <div class="form-group mb-0">
                  <div class="row">
                    <label for="sort" class="col-sm-2">Sort by:</label>
                    <div class="col-sm-3">
                      <input type="date" name="sort" class="form-control">
                    </div>
                    <label for="filter" class="col-sm-2">Filtered by:</label>
                    <div class="col-sm-3">
                      <select name="filter" id="" class="form-control">
                        <option value="s">Not selected</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-12">
              <h4 class="mb-20 heading-secondary">Social media analytics</h4>

              <!-- Social media cards -->
              <!-- Tripadvisor -->
              <!-- <div class="row mb-20">
                <div class="col-md-12">
                  <div class="col-md-6 pl-0">
                    <div class="social-media tripadvisor__table">
                      <div class="flex mb-20 align-center">
                        <div class="col-md-2 pl-0">
                          <img src="<?php echo base_url('images/tripadvisor.svg') ?>" class="social-media__image" alt="Tripadvisor logo">
                        </div>
                        <div class="col-md-8 p-0">
                          <div class="social-media__line social-media__line--tripadvisor"></div>
                        </div>
                        <div class="col-md-2">
                          <span><button type="button" clas="btn btn-sm" data-toggle="modal" data-target="#tripadvisormodal">Setup</button></span>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12 p-0">
                          <table class="table">
                            <thead>
                              <th>&nbsp;</th>
                              <th class="text-center">Competitors</th>
                              <th class="text-center">Rankings</th>
                              <th class="text-center">Reviews</th>
                              <th class="text-center">Ratings</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-right text-gray-light text-bold">MB</td>
                                <td class="text-right  text-bold">Mochilero</td>
                                <td class="text-center  text-bold">143</td>
                                <td class="text-center  text-bold">776</td>
                                <td class="text-center  text-bold">4</td>
                              </tr>
                              <tr>
                                <td colspan="5">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">1</td>
                                <td class="text-right">Inti</td>
                                <td class="text-center">1</td>
                                <td class="text-center">1800</td>
                                <td class="text-center">5</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">2</td>
                                <td class="text-right">Mercado</td>
                                <td class="text-center">2</td>
                                <td class="text-center">1500</td>
                                <td class="text-center">4.7</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">3</td>
                                <td class="text-right">Honey &amp; Dough</td>
                                <td class="text-center">3</td>
                                <td class="text-center">1300</td>
                                <td class="text-center">4.5</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">4</td>
                                <td class="text-right">Mar &amp; Sand</td>
                                <td class="text-center">4</td>
                                <td class="text-center">1400</td>
                                <td class="text-center">4.4</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">5</td>
                                <td class="text-right">Okra</td>
                                <td class="text-center">5</td>
                                <td class="text-center">1100</td>
                                <td class="text-center">4.3</td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td class="text-gray-light text-bold text-right">Total Competitors</td>
                                <td class="text-gray-light text-bold text-center">204</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="social-media tripadvisor__graph overflow-hidden">
                      <div class="chartjs-size-monitor">
                        <div class="chart__heading mb-20">
                          <h4 class="chart__heading--primary text-center">Tripadvisor</h4>
                          <h5 class="chart__heading--sub text-center text-gray-light">Rating</h5>
                        </div>
                        <div id="chart__tripadvisor"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->

              <!-- Facebook -->
              <div class="row mb-20">
                <div class="col-md-12">
                  <div class="col-md-6 pl-0">
                    <div class="social-media facebook__table">
                      <div class="flex mb-20 align-center">
                        <div class="col-md-2 pl-0">
                          <img src="<?php echo base_url('images/facebook.svg') ?>" class="social-media__image social-media__image--facebook" alt="Facebook logo">
                        </div>
                        <div class="col-md-8 p-0">
                          <div class="social-media__line social-media__line--facebook"></div>
                        </div>
                        <div class="col-md-2">
                          <span><button type="button" clas="btn btn-sm" data-toggle="modal" data-target="#facebookmodal" style="background-color:#3b5998; border:none;border-radius:5px;color:white;">Setup</button></span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 p-0">
                          <table class="table">
                            <thead>
                              <th>&nbsp;</th>
                              <th class="text-center">User</th>
                              <th class="text-center">Reviews</th>
                              <th class="text-center">Likes</th>
                              <th class="text-center">Posts Engagements</th>
                            </thead>
                            <tbody>
                              <tr>
                                <td class="text-right text-gray-light text-bold">MB</td>
                                <td class="text-right  text-bold" id="face_user">No User</td>
                                <td class="text-center  text-bold" id="face_reviews">0</td>
                                <td class="text-center  text-bold" id="face_likes">0</td>
                                <td class="text-center  text-bold" id="face_engagements">0</td>
                              </tr>
                              <tr>
                                <td colspan="5">&nbsp;</td>
                              </tr>
                            </tbody>
                          </table>
                          <hr>
                        </div>
                        <div class="col-md-12">
                          <div class="col-md-6">
                            <div class="stats" style="border-right: 1px solid #eee;">
                              <h3 class="starts__title text-left">Likes</h3>
                              <p class="paragraph text-center">Total</p>
                              <h4 class="starts__value text-center" id="total_likes">0</h4>
                              <!-- <p class="paragraph text-center">Last month: <span id="last_month_likes">0</span></p> -->
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="stats ">
                              <h3 class="starts__title text-left">Posts</h3>
                              <p class="paragraph text-center">This Month</p>
                              <h4 class="starts__value text-center" id="this_month_posts">0</h4>
                              <p class="paragraph text-center">Total Posts: <span id="total_posts">0</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="social-media facebook__graph">
                      <div class="chartjs-size-monitor">
                        <div class="chart__heading mb-20">
                          <h4 class="chart__heading--primary text-center">Facebook</h4>
                          <h5 class="chart__heading--sub text-center text-gray-light">Reviews</h5>
                        </div>
                        <div id="chart__facebook"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pinterest -->
            <!-- <div class="row mb-20">
              <div class="col-md-12">
                <div class="col-md-6 pl-0">
                  <div class="social-media pinterest__table">
                    <div class="flex mb-20 align-center">
                      <div class="col-md-2 pl-0">
                        <img src="<?php echo base_url('images/pinterest.svg') ?>" class="social-media__image social-media__image--pinterest" alt="Tripadvisor logo">
                      </div>
                      <div class="col-md-8 p-0">
                        <div class="social-media__line social-media__line--pinterest"></div>
                      </div>
                      <div class="col-md-2">
                        <span><button clas="btn btn-sm" data-toggle="modal" data-target="#pinterestmodal">Setup</button></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 p-0">
                        <table class="table">
                          <thead>
                            <th>&nbsp;</th>
                            <th class="text-center">Competitors</th>
                            <th class="text-center">Monthly viewers (k)</th>
                            <th class="text-center">Followers</th>
                            <th class="text-center">Following</th>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-right text-gray-light text-bold">MB</td>
                              <td class="text-right  text-bold">Mochilero</td>
                              <td class="text-center  text-bold">1.5</td>
                              <td class="text-center  text-bold">20</td>
                              <td class="text-center  text-bold">3</td>
                            </tr>
                            <tr>
                              <td colspan="5">&nbsp;</td>
                            </tr>
                            <tr>
                              <td class="text-right text-gray-light">1</td>
                              <td class="text-right">Inti</td>
                              <td class="text-center">2</td>
                              <td class="text-center">50</td>
                              <td class="text-center">10</td>
                            </tr>
                            <tr>
                              <td class="text-right text-gray-light">2</td>
                              <td class="text-right">Mercado</td>
                              <td class="text-center">1.9</td>
                              <td class="text-center">40</td>
                              <td class="text-center">9</td>
                            </tr>
                            <tr>
                              <td class="text-right text-gray-light">3</td>
                              <td class="text-right">Honey &amp; Dough</td>
                              <td class="text-center">1.8</td>
                              <td class="text-center">30</td>
                              <td class="text-center">8</td>
                            </tr>
                            <tr>
                              <td class="text-right text-gray-light">4</td>
                              <td class="text-right">Mar &amp; Sand</td>
                              <td class="text-center">1.75</td>
                              <td class="text-center">25</td>
                              <td class="text-center">7</td>
                            </tr>
                            <tr>
                              <td class="text-right text-gray-light">5</td>
                              <td class="text-right">Okra</td>
                              <td class="text-center">1.7</td>
                              <td class="text-center">30</td>
                              <td class="text-center">6</td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td class="text-gray-light text-bold text-right">Average</td>
                              <td class="text-bold text-center text-gray-light">2</td>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="social-media pinterest__graph">
                    <div class="chartjs-size-monitor">
                      <h4 class="chart__heading--primary text-center">Pinterest</h4>
                      <h5 class="chart__heading--sub text-center text-gray-light">Mthly. Viewers (k)</h5>
                    </div>
                    <div id="chart__pinterest"></div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

            <!-- Instagram -->
            <div class="row mb-20">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="social-media instagram__table">
                    <div class="flex mb-20 align-center">
                      <div class="col-md-2 pl-0">
                        <img src="<?php echo base_url('images/instagram.svg') ?>" class="social-media__image social-media__image--pinterest" alt="Tripadvisor logo">
                      </div>
                      <div class="col-md-8 p-0">
                        <div class="social-media__line social-media__line--instagram"></div>
                      </div>
                      <div class="col-md-2">
                        <span><button clas="btn btn-sm" id="instagram" data-toggle="modal" data-target="#instagrammodal" style="background-color:#fcaf45; border:none; border-radius:5px;color:white;">Setup</button></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 p-0">
                        <table class="table">
                          <thead>
                            <th>&nbsp;</th>
                            <th class="text-center">Competitors</th>
                            <th class="text-center">Followers</th>
                            <th class="text-center">Posts</th>
                            <th class="text-center">Following</th>
                          </thead>
                          <form action="">
                            <tbody>
                              <tr>
                                <td class="text-right text-gray-light text-bold">MB</td>
                                <td class="text-right  text-bold" id="user_insta">No User</td>
                                <td class="text-center  text-bold" id="followers_insta">0</td>
                                <td class="text-center  text-bold" id="posts_insta">0</td>
                                <td class="text-center  text-bold" id="following_insta">0</td>
                              </tr>
                              <tr>
                                <td colspan="5">&nbsp;</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">1</td>
                                <td class="text-right" id="insta_user_comp1">No Competitor</td>
                                <td class="text-center" id="insta_followers_comp1">0</td>
                                <td class="text-center" id="insta_posts_comp1">0</td>
                                <td class="text-center" id="insta_following_comp1">0</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">2</td>
                                <td class="text-right" id="insta_user_comp2">No Competitor</td>
                                <td class="text-center" id="insta_followers_comp2">0</td>
                                <td class="text-center" id="insta_posts_comp2">0</td>
                                <td class="text-center" id="insta_following_comp2">0</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">3</td>
                                <td class="text-right" id="insta_user_comp3">No Competitor</td>
                                <td class="text-center" id="insta_followers_comp3">0</td>
                                <td class="text-center" id="insta_posts_comp3">0</td>
                                <td class="text-center" id="insta_following_comp3">0</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">4</td>
                                <td class="text-right" id="insta_user_comp4">No Competitor</td>
                                <td class="text-center" id="insta_followers_comp4">0</td>
                                <td class="text-center" id="insta_posts_comp4">0</td>
                                <td class="text-center" id="insta_following_comp4">0</td>
                              </tr>
                              <tr>
                                <td class="text-right text-gray-light">5</td>
                                <td class="text-right" id="insta_user_comp5">No Competitor</td>
                                <td class="text-center" id="insta_followers_comp5">0</td>
                                <td class="text-center" id="insta_posts_comp5">0</td>
                                <td class="text-center" id="insta_following_comp5">0</td>
                              </tr>
                              <input type="hidden" value="value" id="instagram_id">
                            </tbody>
                          </form>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="social-media instagram__graph">
                    <div class="chartjs-size-monitor">
                      <h4 class="chart__heading--primary text-center">Instagram</h4>
                      <h5 class="chart__heading--sub text-center text-gray-light">Followers</h5>
                    </div>
                    <div id="chart__instagram"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Twitter -->
          <div class="row mb-20">
            <div class="col-md-12">
              <div class="col-md-6 pl-0">
                <div class="social-media twitter__table">
                  <div class="flex mb-20 align-center">
                    <div class="col-md-2 pl-0">
                      <img src="<?php echo base_url('/images/twitter.svg') ?>" class="social-media__image social-media__image--twitter" alt="Tripadvisor logo">
                    </div>
                    <div class="col-md-8 p-0">
                      <div class="social-media__line social-media__line--twitter"></div>
                    </div>
                    <div class="col-md-2">
                      <span><button clas="btn btn-sm" id="twitter" data-toggle="modal" data-target="#twittermodal" style="background-color:#1da1f2; border:none; border-radius:5px;color:white;">Setup</button></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 p-0">
                      <table class="table">
                        <thead>
                          <th>&nbsp;</th>
                          <th class="text-center">Competitors</th>
                          <th class="text-center">7 Days Tweets</th>
                          <th class="text-center">Followers</th>
                          <th class="text-center">Following</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-right text-gray-light text-bold">MB</td>
                            <td class="text-right  text-bold" id="user_username">No User</td>
                            <td class="text-center  text-bold" id="user_tweet">0</td>
                            <td class="text-center  text-bold" id="user_followers">0</td>
                            <td class="text-center  text-bold" id="user_following">0</td>
                          </tr>

                          <td colspan="5">&nbsp;</td>
                          </tr>
                          <tr>
                            <td class="text-right text-gray-light">1</td>
                            <td class="text-right" id="comp1_username">No Competitor</td>
                            <td class="text-center" id="comp1_tweet">0</td>
                            <td class="text-center" id="comp1_followers">0</td>
                            <td class="text-center" id="comp1_following">0</td>
                          </tr>
                          <tr>
                            <td class="text-right text-gray-light">2</td>
                            <td class="text-right" id="comp2_username">No Competitor</td>
                            <td class="text-center" id="comp2_tweet">0</td>
                            <td class="text-center" id="comp2_followers">0</td>
                            <td class="text-center" id="comp2_following">0</td>
                          </tr>
                          <tr>
                            <td class="text-right text-gray-light">3</td>
                            <td class="text-right" id="comp3_username">No Competitor</td>
                            <td class="text-center" id="comp3_tweet">0</td>
                            <td class="text-center" id="comp3_followers">0</td>
                            <td class="text-center" id="comp3_following">0</td>
                          </tr>
                          <tr>
                            <td class="text-right text-gray-light">4</td>
                            <td class="text-right" id="comp4_username">No Competitor</td>
                            <td class="text-center" id="comp4_tweet">0</td>
                            <td class="text-center" id="comp4_followers">0</td>
                            <td class="text-center" id="comp5_following">0</td>
                          </tr>

                          <tr>
                            <td class="text-right text-gray-light">5</td>
                            <td class="text-right" id="comp5_username">No Competitor</td>
                            <td class="text-center" id="comp5_tweet">0</td>

                            <td class="text-center" id="comp5_followers">0</td>
                            <td class="text-center" id="comp5_following">0</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="social-media twitter__graph">
                  <div class="chartjs-size-monitor">
                    <h4 class="chart__heading--primary text-center">Twitter</h4>
                    <h5 class="chart__heading--sub text-center text-gray-light">Tweets</h5>
                  </div>
                  <div id="chart__twitter"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</section>
</div>
<!-- Modal -->
<!-- face Advisor modal -->
<!-- <div class="modal fade" id="tripadvisormodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <h4>Setup TripAdvisor Analytics</h4>
        </div>
      </div>
      <div class="modal-body">
        <form method="POST" id="saveTripAdvisor">
          <div class="form-group">
            <label class="col-sm-6 control-label">Your face Advisor Username</label>
            <div class="col-sm-6">
              <input type="text" name="username" autocomplete="OFF" class="form-control " id="username_trip">
              <input name="type" value="Trip Advisor" autocomplete="OFF" type="hidden" class="form-control" id="username_trip_hidden">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competior One Username</label>
            <div class="col-sm-6">
              <input type="text" id="compe1_trip" name="compe1" autocomplete="OFF" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Two Username</label>
            <div class="col-sm-6">
              <input name="compe2" id="compe2_trip" autocomplete="OFF" type="text" class="form-control" id="comp2">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Three Username</label>
            <div class="col-sm-6">
              <input name="compe3" id="compe3_trip" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Four Username</label>
            <div class="col-sm-6">
              <input name="compe4" id="compe4_trip" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Five Username</label>
            <div class="col-sm-6">
              <input name="compe5" id="compe5_trip" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="modal-footer" style="padding-top:40px">
            <button type="button" data-dismiss="modal" class="btn bg-red">Cancel</button>
            <button type="button" onclick="save_tripadvisor(event)" class="btn bg-success">Save</button>
          </div>

        </form>

      </div>

    </div>
  </div>
</div> -->
<!-- Facebook Modal -->
<div class="modal fade" id="facebookmodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <h4>Setup Facebook Analytics</h4>
        </div>
      </div>
      <div class="modal-body">
        <form action="" method="POST">


          <?php
          // print_r($social);
          if (count($social) > 0) {
            foreach ($social as $item) {
              if (!empty($item->SOCIAL_MEDIA_TYPE === 'FACEBOOK')) {
                if ($item->SOCIAL_MEDIA_TYPE === 'FACEBOOK') {
                  $type_face = ($item->SOCIAL_MEDIA_TYPE === 'undefined') ? "FACEBOOK" : $item->SOCIAL_MEDIA_TYPE;
                  $id_face = $item->SOCIAL_ID;
                  $username_face = ($item->YOUR_USERNAME === 'undefined') ? "" : $item->YOUR_USERNAME;
                  $compe1_face = ($item->COMP_1 === 'undefined') ? "" : $item->COMP_1;
                  $compe2_face = ($item->COMP_2 === 'undefined') ? "" : $item->COMP_2;
                  $compe3_face = ($item->COMP_3 === 'undefined') ? "" : $item->COMP_3;
                  $compe4_face = ($item->COMP_4 === 'undefined') ? "" : $item->COMP_4;
                  $compe5_face = ($item->COMP_5 === 'undefined') ? "" : $item->COMP_5;
                  $app_id_face = ($item->COMP_5 === 'undefined') ? "" : $item->FACEBOOK_APP_ID;
                  $app_secret_face = ($item->COMP_5 === 'undefined') ? "" : $item->FACEBOOK_APP_SECRET;
                  $face_accesstoken_face = ($item->COMP_5 === 'undefined') ? "" : $item->FACEBOOK_ACCESS_TOKEN;
                }
              }
            }
          }


          ?>


          <div style="border: 1px solid #ccc; border-radius:10px;">
            <div class="text-muted" style="margin:10px;">
            <strong>Note!</strong> In order to use Facebook analytics effectively you must have Facebook Account and credentials like the 
            <strong>app_id</strong>, <strong>app_secret</strong>, and <strong>page_access_token(facebook page access token not user token)</strong>
            which can be generated on <a href="https://developers.facebook.com/apps/" target="_blank" title="Facebook Developer" style="color:blue;">Facebook Developers Dashboard</a>
            </div>
          
            <div class="form-group" style="padding-top:40px">
              <label class="col-sm-6 control-label">App_Id</label>
              <div class="col-sm-6">
                <input name="face_app_id" value="<?php echo (count($social) > 0) ? ((!empty($app_id_face)) ? $app_id_face : "") : ""; ?>" id="face_app_id" autocomplete="OFF" type="text" class="form-control" required>
                <input name="social_id" id="face_id" value="<?php echo (count($social) > 0) ? (!empty($id_face)) ? $id_face : "") : ""; ?>" autocomplete="OFF" type="hidden" class="form-control">
              </div>
            </div>

            <div class="form-group" style="padding-top:40px">
              <label class="col-sm-6 control-label">App_Secret</label>
              <div class="col-sm-6">
                <input name="face_app_secret" value="<?php echo (count($social) > 0) ? ((!empty($app_secret_face)) ? $app_secret_face : "") : ""; ?>" id="face_app_secret" autocomplete="OFF" type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-group" style="padding-top:40px;padding-bottom:20px;">
              <label class="col-sm-6 control-label">Page_Access_Token</label>
              <div class="col-sm-6">
                <input name="face_access_token" value="<?php echo (count($social) > 0) ? ((!empty($face_accesstoken_face)) ? $face_accesstoken_face : "") : ""; ?>" id="face_access_token" autocomplete="OFF" type="text" class="form-control" required>
              </div>
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="col-sm-6 control-label">Your Facebook Username</label>
            <div class="col-sm-6">
              <input name="username_face" value="<?php echo (count($social) > 0) ? $username_face : ""; ?>" id="username_face" autocomplete="OFF" type="text" class="form-control">
              <input name="social_id" id="face_id" value="<?php echo (count($social) > 0) ? $id_face : ""; ?>" autocomplete="OFF" type="hidden" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competior One Username</label>
            <div class="col-sm-6">
              <input name="compe1_face" id="compe1_face" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Two Username</label>
            <div class="col-sm-6">
              <input name="compe2_face" id="compe2_face" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Three Username</label>
            <div class="col-sm-6">
              <input name="compe3_face" id="compe3_face" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Four Username</label>
            <div class="col-sm-6">
              <input name="compe4_face" id="compe4_face" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Five Username</label>
            <div class="col-sm-6">
              <input name="compe5_face" id="compe5_face" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div> -->

          <div class="modal-footer" style="padding-top:40px">
            <button type="button" data-dismiss="modal" class="btn bg-red">Cancel</button>
            <button type="button" onclick=<?php echo (count($social) > 0) ? ((!empty($type_face)) ? "update_facebook(event)" : "save_facebook(event)") : "save_facebook(event)"; ?> class="btn bg-success">Save</button>
          </div>

        </form>
      </div>

    </div>
  </div>
</div>
<!-- Pintrest Modal -->
<!-- <div class="modal fade" id="pinterestmodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <h4>Setup Pinterst Analytics</h4>
        </div>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <?php

          if (count($social) > 0) {
            foreach ($social as $item) {
              if (!empty($item->SOCIAL_MEDIA_TYPE === 'PINTEREST')) {
                if ($item->SOCIAL_MEDIA_TYPE === 'PINTEREST') {
                  $type_pin = ($item->SOCIAL_MEDIA_TYPE === 'undefined') ? "PINTEREST" : $item->SOCIAL_MEDIA_TYPE;
                  $id_pin = $item->SOCIAL_ID;
                  $username_pin = ($item->YOUR_USERNAME === 'undefined') ? "" : $item->YOUR_USERNAME;
                  $compe1_pin = ($item->COMP_1 === 'undefined') ? "" : $item->COMP_1;
                  $compe2_pin = ($item->COMP_2 === 'undefined') ? "" : $item->COMP_2;
                  $compe3_pin = ($item->COMP_3 === 'undefined') ? "" : $item->COMP_3;
                  $compe4_pin = ($item->COMP_4 === 'undefined') ? "" : $item->COMP_4;
                  $compe5_pin = ($item->COMP_5 === 'undefined') ? "" : $item->COMP_5;
                }
              }
            }
          }


          ?>
          <div class="form-group">
            <label class="col-sm-6 control-label">Your Pinterest Username</label>
            <div class="col-sm-6">
              <input name="username_pin" value="<?php echo (count($social) > 0) ? $username_pin : ""; ?>" id="username_pin" autocomplete="OFF" type="text" class="form-control">
              <input name="social_id" id="pin_id" value="<?php echo (count($social) > 0) ? $id_pin : ""; ?>" autocomplete="OFF" type="hidden" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competior One Username</label>
            <div class="col-sm-6">
              <input name="compe1_pin" value="<?php echo (count($social) > 0) ? $compe1_pin : ""; ?>" id="compe1_pin" autocomplete="OFF" type="text" class="form-control">
            </div>pin
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Two Username</label>
            <div class="col-sm-6">
              <input name="compe2_pin" value="<?php echo (count($social) > 0) ? $compe2_pin : ""; ?>" id="compe2_pin" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Three Username</label>
            <div class="col-sm-6">
              <input name="compe3_pin" value="<?php echo (count($social) > 0) ? $compe3_pin : ""; ?>" id="compe3_pin" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Four Username</label>
            <div class="col-sm-6">
              <input name="compe4_pin" value="<?php echo (count($social) > 0) ? $compe4_pin : ""; ?>" id="compe4_pin" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Five Username</label>
            <div class="col-sm-6">
              <input name="compe5_pin" value="<?php echo (count($social) > 0) ? $compe5_pin : ""; ?>" id="compe5_pin" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="modal-footer" style="padding-top:40px">
            <button type="button" data-dismiss="modal" class="btn bg-red">Cancel</button>
            <button type="button" onclick=<?php echo (count($social) > 0) ? ((!empty($type_pin)) ? "update_pinterest(event)" : "save_pinterest(event)") : "save_pinterest(event)"; ?> class="btn bg-success">Save</button>

          </div>

        </form>
      </div>

    </div>
  </div>
</div> -->
<!-- Instagram Modal -->
<div class="modal fade" id="instagrammodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <h4>Setup Instagram Analytics</h4>
        </div>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <?php
          // print_r($social);
          if (count($social) > 0) {
            foreach ($social as $item) {
              if (!empty($item->SOCIAL_MEDIA_TYPE === 'INSTAGRAM')) {
                if ($item->SOCIAL_MEDIA_TYPE === 'INSTAGRAM') {
                  $type_insta = ($item->SOCIAL_MEDIA_TYPE === 'undefined') ? "INSTAGRAM" : $item->SOCIAL_MEDIA_TYPE;
                  $id_insta = $item->SOCIAL_ID;
                  $username_insta = ($item->YOUR_USERNAME === 'undefined') ? "" : $item->YOUR_USERNAME;
                  $compe1_insta = ($item->COMP_1 === 'undefined') ? "" : $item->COMP_1;
                  $compe2_insta = ($item->COMP_2 === 'undefined') ? "" : $item->COMP_2;
                  $compe3_insta = ($item->COMP_3 === 'undefined') ? "" : $item->COMP_3;
                  $compe4_insta = ($item->COMP_4 === 'undefined') ? "" : $item->COMP_4;
                  $compe5_insta = ($item->COMP_5 === 'undefined') ? "" : $item->COMP_5;
                }
              }
            }
          }
          ?>
          
          <div class="form-group">
            <label class="col-sm-6 control-label">Your Instagram Username</label>
            <div class="col-sm-6">
              <input name="username_insta" value="<?php echo (count($social) > 0) ? ((!empty($username_insta)) ? $username_insta :"" ) : ""; ?>" id="username_insta" autocomplete="OFF" type="text" class="form-control">
              <input name="social_id" id="insta_id" value="<?php echo (count($social) > 0) ? ((!empty($id_insta)) ? $id_insta : "") : ""; ?>" autocomplete="OFF" type="hidden" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competior One Username</label>
            <div class="col-sm-6">
              <input name="compe1_insta" value="<?php echo (count($social) > 0) ? ((!empty($compe1_insta)) ? $compe1_insta : "") : ""; ?>" id="compe1_insta" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Two Username</label>
            <div class="col-sm-6">
              <input name="compe2_insta" value="<?php echo (count($social) > 0) ? ((!empty($compe2_insta)) ? $compe2_insta : "") : ""; ?>" id="compe2_insta" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Three Username</label>
            <div class="col-sm-6">
              <input name="compe3_insta" value="<?php echo (count($social) > 0) ? ((!empty($compe3_insta)) ? $compe3_insta : "") : ""; ?>" id="compe3_insta" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Four Username</label>
            <div class="col-sm-6">
              <input name="compe4_insta" value="<?php echo (count($social) > 0) ? ((!empty($compe4_insta)) ? $compe4_insta : "") : ""; ?>" id="compe4_insta" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Five Username</label>
            <div class="col-sm-6">
              <input name="compe5_insta" value="<?php echo (count($social) > 0) ? ((!empty($compe5_insta)) ? $compe5_insta : "") : ""; ?>" id="compe5_insta" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="modal-footer" style="padding-top:40px">
            <button type="button" data-dismiss="modal" class="btn bg-red">Cancel</button>
            <button type="button" onclick=<?php echo (count($social) > 0) ? ((!empty($type_insta)) ? "update_instagram(event)" : "save_instagram(event)") : "save_instagram(event)"; ?> class="btn bg-success">Save</button>
          </div>
        </form>

      </div>


    </div>
  </div>
</div>

<!-- Twitter Modal -->
<div class="modal fade" id="twittermodal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title">
          <h4>Setup Twitter Analytics</h4>
        </div>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <?php
          // print_r($social);
          if (count($social) > 0) {
            foreach ($social as $item) {
              if (!empty($item->SOCIAL_MEDIA_TYPE === 'TWITTER')) {
                if ($item->SOCIAL_MEDIA_TYPE === 'TWITTER') {
                  $type_twit = ($item->SOCIAL_MEDIA_TYPE === 'undefined') ? "TWITTER" : $item->SOCIAL_MEDIA_TYPE;
                  $id_twit = $item->SOCIAL_ID;
                  $username_twit = ($item->YOUR_USERNAME === 'undefined') ? "" : $item->YOUR_USERNAME;
                  $compe1_twit = ($item->COMP_1 === 'undefined') ? "" : $item->COMP_1;
                  $compe2_twit = ($item->COMP_2 === 'undefined') ? "" : $item->COMP_2;
                  $compe3_twit = ($item->COMP_3 === 'undefined') ? "" : $item->COMP_3;
                  $compe4_twit = ($item->COMP_4 === 'undefined') ? "" : $item->COMP_4;
                  $compe5_twit = ($item->COMP_5 === 'undefined') ? "" : $item->COMP_5;
                  $access_token_twit = ($item->TWITTER_ACCESS_TOKEN === 'undefined') ? "" :  $item->TWITTER_ACCESS_TOKEN;
                  $access_token_secret_twit = ($item->TWITTER_ACCESS_TOKEN_SECRET === 'undefined') ? "" :  $item->TWITTER_ACCESS_TOKEN_SECRET;
                  $consumer_key_twit = ($item->TWITTER_CONSUMER_KEY === 'undefined') ? "" :  $item->TWITTER_CONSUMER_KEY;
                  $consumer_secret_twit = ($item->TWITTER_CONSUMER_SECRET === 'undefined') ? "" :  $item->TWITTER_CONSUMER_SECRET;
                }
              }
            }
          }


          ?>
          <div style="border: 1px solid #ccc; border-radius:10px;">
            <div class="text-muted" style="margin:10px;">
            <strong>Note!</strong> In order to use twitter analytics effectively you must have Twitter Account and credentials like the 
            <strong>oauth_access_token</strong>, <strong>oauth_access_token_secret</strong>, <strong>consumer_key</strong>, <strong>consumer_secret</strong>
            which can be generated on <a href="https://developer.twitter.com/en/apply-for-access" target="_blank" title="Twitter Developer" style="color:blue;">Twitter Developers Dashboard</a>
            </div>
          
            <div class="form-group" style="padding-top:40px">
              <label class="col-sm-6 control-label">Ouath_Access_Token</label>
              <div class="col-sm-6">
                <input name="access_token_twit" value="<?php echo (count($social) > 0) ? ((!empty($access_token_twit)) ? $access_token_twit : "") : ""; ?>" id="access_token_twit" autocomplete="OFF" type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-group" style="padding-top:40px">
              <label class="col-sm-6 control-label">Oauth_Access_Token_Secret</label>
              <div class="col-sm-6">
                <input name="access_token_secret_twit" value="<?php echo (count($social) > 0) ? ((!empty($access_token_secret_twit)) ? $access_token_secret_twit : "") : ""; ?>" id="access_token_secret_twit" autocomplete="OFF" type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-group" style="padding-top:40px">
              <label class="col-sm-6 control-label">Consumer_Key</label>
              <div class="col-sm-6">
                <input name="consumer_key_twit" value="<?php echo (count($social) > 0) ? ((!empty($consumer_key_twit)) ? $consumer_key_twit : "") : ""; ?>" id="consumer_key_twit" autocomplete="OFF" type="text" class="form-control" required>
              </div>
            </div>

            <div class="form-group" style="padding-top:40px;padding-bottom:20px">
              <label class="col-sm-6 control-label">Consumer_Secret</label>
              <div class="col-sm-6">
                <input name="consumer_secret_twit" value="<?php echo (count($social) > 0) ? ((!empty($consumer_secret_twit)) ? $consumer_secret_twit : "") : ""; ?>" id="consumer_secret_twit" autocomplete="OFF" type="text" class="form-control" required>
              </div>
            </div>
          </div>

          <div class="form-group" style="padding-top:20px">
            <label class="col-sm-6 control-label">Your Twitter Username</label>
            <div class="col-sm-6">
              <input name="username_twit" value="<?php echo (count($social) > 0) ? ((!empty($username_twit)) ? $username_twit : "") : ""; ?>" id="username_twit" autocomplete="OFF" type="text" class="form-control">
              <input name="social_id" id="social_id" value="<?php echo (count($social) > 0) ? ((!empty($id_twit)) ? $id_twit : "") : ""; ?>" autocomplete="OFF" type="hidden" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competior One Username</label>
            <div class="col-sm-6">
              <input name="compe1_twit" value="<?php echo (count($social) > 0) ? ((!empty($compe1_twit)) ? $compe1_twit : "") : ""; ?>" id="compe1_twit" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Two Username</label>
            <div class="col-sm-6">
              <input name="compe2_twit" value="<?php echo (count($social) > 0) ? ((!empty($compe2_twit)) ? $compe2_twit : "") : ""; ?>" id="compe2_twit" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Three Username</label>
            <div class="col-sm-6">
              <input name="compe3_twit" value="<?php echo (count($social) > 0) ? ((!empty($compe3_twit)) ? $compe3_twit : "") : ""; ?>" id="compe3_twit" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Four Username</label>
            <div class="col-sm-6">
              <input name="compe4_twit" value="<?php echo (count($social) > 0) ? ((!empty($compe4_twit)) ? $compe4_twit : "") : ""; ?>" id="compe4_twit" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="form-group" style="padding-top:40px">
            <label class="col-sm-6 control-label">Competitor Five Username</label>
            <div class="col-sm-6">
              <input name="compe5_twit" value="<?php echo (count($social) > 0) ? ((!empty($compe5_twit)) ? $compe5_twit : "") : ""; ?>" id="compe5_twit" autocomplete="OFF" type="text" class="form-control">
            </div>
          </div>

          <div class="modal-footer" style="padding-top:40px">
            <button type="button" data-dismiss="modal" class="btn bg-red">Cancel</button>

            <button type="button" onclick=<?php echo (count($social) > 0) ? ((!empty($type_twit)) ? "update_twitter(event)" : "save_twitter(event)") : "save_twitter(event)"; ?> class="btn bg-success">Save</button>
          </div>

        </form>

      </div>

    </div>
  </div>
</div>

<!-- Save Upate user usernames -->
<script type="text/javascript">
  // save_tripadvisor = (event) => {

  //   event.preventDefault();


  //   var formData = new FormData();

  //   formData.append("username_trip", $("#username_trip").val());
  //   formData.append("username_trip_hidden", $("#username_trip_hidden").val());
  //   formData.append("compe1_trip", $("#compe1_trip").val());
  //   formData.append("compe2_trip", $("#compe2_trip").val());
  //   formData.append("compe3_trip", $("#compe3_trip").val());
  //   formData.append("compe4_trip", $("#compe4_trip").val());
  //   formData.append("compe5_trip", $("#compe5_trip").val());


  //   let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/saveTripAdvisor'); ?>";

  //   $.ajax({
  //     async: false,
  //     type: 'post',
  //     url: link,
  //     data: formData,
  //     cache: false,
  //     processData: false,
  //     contentType: false,

  //     success: function(data) {

  //       // console.log(data);
  //       location.reload();

  //     }

  //   });


  // }

  // Save facebook
  save_facebook = (event) => {

    event.preventDefault();


    var formData = new FormData();

    formData.append("face_app_id", $("#face_app_id").val());
    formData.append("face_app_secret", $("#face_app_secret").val());
    formData.append("face_access_token", $("#face_access_token").val());
    


    let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/saveFacebook'); ?>";

    $.ajax({
      async: false,
      type: 'post',
      url: link,
      data: formData,
      cache: false,
      processData: false,
      contentType: false,

      success: function(data) {

        // console.log(data);
        location.reload();

      }

    });


  }

  // Save facebook
  update_facebook = (event) => {

    event.preventDefault();


    var formData = new FormData();

    formData.append("face_app_id", $("#face_app_id").val());
    formData.append("face_app_secret", $("#face_app_secret").val());
    formData.append("face_access_token", $("#face_access_token").val());
    formData.append("face_id", $("#face_id").val());



    let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/updateFacebook'); ?>";

    $.ajax({
      async: false,
      type: 'post',
      url: link,
      data: formData,
      cache: false,
      processData: false,
      contentType: false,

      success: function(data) {

        // console.log(data);
        location.reload();

      }

    });


  }

  // Save Pinterest
  // save_pinterest = (event) => {
  //   event.preventDefault();


  //   var formData = new FormData();

  //   formData.append("username_pin", $("#username_pin").val());
  //   formData.append("compe1_pin", $("#compe1_pin").val());
  //   formData.append("compe2_pin", $("#compe2_pin").val());
  //   formData.append("compe3_pin", $("#compe3_pin").val());
  //   formData.append("compe4_pin", $("#compe4_pin").val());
  //   formData.append("compe5_pin", $("#compe5_pin").val());


  //   let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/savePinterest'); ?>";

  //   $.ajax({
  //     async: false,
  //     type: 'post',
  //     url: link,
  //     data: formData,
  //     cache: false,
  //     processData: false,
  //     contentType: false,

  //     success: function(data) {

  //       // console.log(data);
  //       location.reload();

  //     }

  //   });


  // }

  // // Update Instagram
  // update_pinterest = (event) => {
  //   event.preventDefault();

  //   var formData = new FormData();

  //   formData.append("username_pin", $("#username_pin").val());
  //   formData.append("compe1_pin", $("#compe1_pin").val());
  //   formData.append("compe2_pin", $("#compe2_pin").val());
  //   formData.append("compe3_pin", $("#compe3_pin").val());
  //   formData.append("compe4_pin", $("#compe4_pin").val());
  //   formData.append("compe5_pin", $("#compe5_pin").val());
  //   formData.append("pin_id", $("#pin_id").val());


  //   let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/updatePinterest'); ?>";

  //   $.ajax({
  //     async: false,
  //     type: 'post',
  //     url: link,
  //     data: formData,
  //     cache: false,
  //     processData: false,
  //     contentType: false,

  //     success: function(data) {
  //       location.reload();
  //     }

  //   });
  // }

  // Save Instgram
  save_instagram = (event) => {

    event.preventDefault();


    var formData = new FormData();

    formData.append("username_insta", $("#username_insta").val());
    formData.append("compe1_insta", $("#compe1_insta").val());
    formData.append("compe2_insta", $("#compe2_insta").val());
    formData.append("compe3_insta", $("#compe3_insta").val());
    formData.append("compe4_insta", $("#compe4_insta").val());
    formData.append("compe5_insta", $("#compe5_insta").val());


    let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/saveInstagram'); ?>";

    $.ajax({
      async: false,
      type: 'post',
      url: link,
      data: formData,
      cache: false,
      processData: false,
      contentType: false,

      success: function(data) {

        // console.log(data);
        location.reload();

      }

    });


  }
  // // Update Instagram
  update_instagram = (event) => {
    event.preventDefault();

    var formData = new FormData();

    formData.append("username_insta", $("#username_insta").val());
    formData.append("compe1_insta", $("#compe1_insta").val());
    formData.append("compe2_insta", $("#compe2_insta").val());
    formData.append("compe3_insta", $("#compe3_insta").val());
    formData.append("compe4_insta", $("#compe4_insta").val());
    formData.append("compe5_insta", $("#compe5_insta").val());
    formData.append("insta_id", $("#insta_id").val());


    let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/updateInstagram'); ?>";

    $.ajax({
      async: false,
      type: 'post',
      url: link,
      data: formData,
      cache: false,
      processData: false,
      contentType: false,

      success: function(data) {
        location.reload();
      }

    });
  }

  // Save Twitter
  save_twitter = (event) => {

    event.preventDefault();


    var formData = new FormData();

    formData.append("username_twit", $("#username_twit").val());
    formData.append("compe1_twit", $("#compe1_twit").val());
    formData.append("compe2_twit", $("#compe2_twit").val());
    formData.append("compe3_twit", $("#compe3_twit").val());
    formData.append("compe4_twit", $("#compe4_twit").val());
    formData.append("compe5_twit", $("#compe5_twit").val());
    formData.append("access_token_twit", $("#access_token_twit").val());
    formData.append("access_token_secret_twit", $("#access_token_secret_twit").val());
    formData.append("consumer_key_twit", $("#consumer_key_twit").val());
    formData.append("consumer_secret_twit", $("#consumer_secret_twit").val());



    let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/saveTwitter'); ?>";

    $.ajax({
      async: false,
      type: 'post',
      url: link,
      data: formData,
      cache: false,
      processData: false,
      contentType: false,

      success: function(data) {

        // console.log(data);
        location.reload();

      }

    });


  }

  update_twitter = (event) => {
    event.preventDefault();

    var formData = new FormData();

    formData.append("username_twit", $("#username_twit").val());
    formData.append("compe1_twit", $("#compe1_twit").val());
    formData.append("compe2_twit", $("#compe2_twit").val());
    formData.append("compe3_twit", $("#compe3_twit").val());
    formData.append("compe4_twit", $("#compe4_twit").val());
    formData.append("compe5_twit", $("#compe5_twit").val());
    formData.append("social_id", $("#social_id").val());
    formData.append("access_token_twit", $("#access_token_twit").val());
    formData.append("access_token_secret_twit", $("#access_token_secret_twit").val());
    formData.append("consumer_key_twit", $("#consumer_key_twit").val());
    formData.append("consumer_secret_twit", $("#consumer_secret_twit").val());


    let link = "<?php echo base_url('index.php/marketingSocialmedia/Socialmedia/updateTwitter'); ?>";

    $.ajax({
      async: false,
      type: 'post',
      url: link,
      data: formData,
      cache: false,
      processData: false,
      contentType: false,

      success: function(data) {
        location.reload();
      }

    });
  }



  

</script>

<!-- Fetch data using instagram api -->
<script>
    // Get Comp User
//     let link = "<?php echo base_url('index.php/marketingSocialmedia/InstagramAPI/instagramAPI'); ?>";
//     $.ajax({
//       async: false,
//       type: 'GET',
//       url: link,

//       success: function(data) {  
//         $("#user_insta").html(data.graphql.user.full_name);
//         $("#followers_insta").html(data.graphql.user.edge_followed_by.count)
//         $("#posts_insta").html(data.graphql.user.edge_owner_to_timeline_media.count)
//         $("#following_insta").html(data.graphql.user.edge_follow.count)
//       }

//     });

//     // Get comp 1
//     let link_comp1 = "<?php echo base_url('index.php/marketingSocialmedia/InstagramAPI/getCompOne'); ?>";
//     $.ajax({
//       async: false,
//       type: 'GET',
//       url: link_comp1,

//       success: function(data) {  
//         $("#insta_user_comp1").html(data.graphql.user.full_name);
//         $("#insta_followers_comp1").html(data.graphql.user.edge_followed_by.count)
//         $("#insta_posts_comp1").html(data.graphql.user.edge_owner_to_timeline_media.count)
//         $("#insta_following_comp1").html(data.graphql.user.edge_follow.count)
//       }

//     });

//     // Get comp 2
//     let link_comp2 = "<?php echo base_url('index.php/marketingSocialmedia/InstagramAPI/getCompTwo'); ?>";
//     $.ajax({
//       async: false,
//       type: 'GET',
//       url: link_comp2,

//       success: function(data) {  
//         $("#insta_user_comp2").html(data.graphql.user.full_name);
//         $("#insta_followers_comp2").html(data.graphql.user.edge_followed_by.count)
//         $("#insta_posts_comp2").html(data.graphql.user.edge_owner_to_timeline_media.count)
//         $("#insta_following_comp2").html(data.graphql.user.edge_follow.count)
//       }

//     });

//     // Get comp 3
//     let link_comp3 = "<?php echo base_url('index.php/marketingSocialmedia/InstagramAPI/getCompThree'); ?>";
//     $.ajax({
//       async: false,
//       type: 'GET',
//       url: link_comp3,

//       success: function(data) {  
//         $("#insta_user_comp3").html(data.graphql.user.full_name);
//         $("#insta_followers_comp3").html(data.graphql.user.edge_followed_by.count)
//         $("#insta_posts_comp3").html(data.graphql.user.edge_owner_to_timeline_media.count)
//         $("#insta_following_comp3").html(data.graphql.user.edge_follow.count)
//       }

//     });

//     // Get comp 4
//     let link_comp4 = "<?php echo base_url('index.php/marketingSocialmedia/InstagramAPI/getCompFour'); ?>";
//     $.ajax({
//       async: false,
//       type: 'GET',
//       url: link_comp4,

//       success: function(data) {  
//         $("#insta_user_comp4").html(data.graphql.user.full_name);
//         $("#insta_followers_comp4").html(data.graphql.user.edge_followed_by.count)
//         $("#insta_posts_comp4").html(data.graphql.user.edge_owner_to_timeline_media.count)
//         $("#insta_following_comp4").html(data.graphql.user.edge_follow.count)
//       }

//     });

//     // Get comp 5
//     let link_comp5 = "<?php echo base_url('index.php/marketingSocialmedia/InstagramAPI/getCompFive'); ?>";
//     $.ajax({
//       async: false,
//       type: 'GET',
//       url: link_comp5,

//       success: function(data) {  
//         $("#insta_user_comp5").html(data.graphql.user.full_name);
//         $("#insta_followers_comp5").html(data.graphql.user.edge_followed_by.count)
//         $("#insta_posts_comp5").html(data.graphql.user.edge_owner_to_timeline_media.count)
//         $("#insta_following_comp5").html(data.graphql.user.edge_follow.count)
//       }

//     });
  
// </script>

<!-- Twitter API from TwitterAPI Controller  -->
<script>
    // User user 1 data
    // let username = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getUsernameAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username,

    //   success: function(data) { 

    //     $("#user_username").html(data.data[0].name)

    //   }
    // });

    // let username_tweets = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getUsernameTweetsAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_tweets,

    //   success: function(data) {
    //     $("#user_tweet").html(data.meta.result_count)
    //   }
    // });

    // let username_followers = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getUsernameFollowersAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_followers,

    //   success: function(data) {
    //     var response = "";
    //     if(data.length <=1){
    //       response = "Loading...";
    //     }else if(data.length >= 2){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#user_followers").html(data.ids.length)
    //   }
    // });

    // let username_following = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getUsernameFollowingAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_following,

    //   success: function(data) {
    //     var response = "";
    //     if(data.length <=1){
    //       response = "Loading...";
    //     }else if(data.length >= 2){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#user_following").html(data.ids.length)
    //   }
    // });

    // // // User comp 1 data
    // let username_comp1 = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp1API'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_comp1,

    //   success: function(data) { 

    //     $("#comp1_username").html(data.data[0].name)
    //   }
    // });

    // let comp1_tweets = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp1TweetsAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp1_tweets,

    //   success: function(data) {
    //     $("#comp1_tweet").html(data.meta.result_count)
    //   }
    // });

    // let comp1_followers = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp1FollowersAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp1_followers,

    //   success: function(data) {

    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp1_followers").html(response)
    //   }
    // });

    // let comp1_following = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp1FollowingAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp1_following,

    //   success: function(data) {
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp1_following").html(response)
    //   }
    // });

    // // // User comp 2 data
    // let username_comp2 = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp2API'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_comp2,

    //   success: function(data) { 

    //     $("#comp2_username").html(data.data[0].name)
    //   }
    // });

    // let comp2_tweets = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp2TweetsAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp2_tweets,

    //   success: function(data) {
    //     $("#comp2_tweet").html(data.meta.result_count)
    //   }
    // });

    // let comp2_followers = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp2FollowersAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp2_followers,

    //   success: function(data) { 
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp2_followers").html(response)
    //   }
    // });

    // let comp2_following = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp2FollowingAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp2_following,

    //   success: function(data) {
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp2_following").html(response)
    //   }
    // });

    // // // User comp 3 data
    // let username_comp3 = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp3API'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_comp3,

    //   success: function(data) { 

    //     $("#comp3_username").html(data.data[0].name)
    //   }
    // });

    // let comp3_tweets = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp3TweetsAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp3_tweets,

    //   success: function(data) {
    //     $("#comp3_tweet").html(data.meta.result_count)
    //   }
    // });

    // let comp3_followers = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp3FollowersAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp3_followers,

    //   success: function(data) {
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp3_followers").html(response)
    //   }
    // });

    // let comp3_following = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp3FollowingAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp3_following,

    //   success: function(data) {
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp3_following").html(response)
    //   }
    // });

    // // // User comp 4 data
    // let username_comp4 = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp4API'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_comp4,

    //   success: function(data) { 

    //     $("#comp4_username").html(data.data[0].name)
    //   }
    // });

    // let comp4_tweets = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp4TweetsAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp4_tweets,

    //   success: function(data) {
    //     $("#comp4_tweet").html(data.meta.result_count)
    //   }
    // });

    // let comp4_followers = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp4FollowersAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp4_followers,

    //   success: function(data) { 
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp4_followers").html(response)
    //   }
    // });

    // let comp4_following = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp4FollowingAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp4_following,

    //   success: function(data) {
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp4_following").html(response)
    //   }
    // });

    // // // User comp 5 data
    // let username_comp5 = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp5API'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: username_comp5,

    //   success: function(data) { 
    //     console.log(data)
    //     $("#comp5_username").html(data.data[0].name)
    //   }
    // });

    // let comp5_tweets = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp5TweetsAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp5_tweets,

    //   success: function(data) {
    //     $("#comp5_tweet").html(data.meta.result_count)
    //   }
    // });

    // let comp5_followers = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp5FollowersAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp5_followers,

    //   success: function(data) {
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp5_followers").html(response)
    //   }
    // });

    // let comp5_following = "<?php echo base_url('index.php/marketingSocialmedia/TwitterAPI/getComp5FollowingAPI'); ?>";
    // $.ajax({
    //   async: false,
    //   type: 'GET',
    //   url: comp5_following,

    //   success: function(data) {
    //     var response = "";
    //     if('errors' in data){
    //       response = "Loading...";
    //     }else if('ids' in data){
    //       response = data.ids.length
    //     } else {
    //       response ="0";
    //     }
    //     // console.log(data.meta.result_count)
    //     $("#comp5_following").html(response)
    //   }
    // });
</script>

<!-- Fetch Facebook Data from facebook on FacebookAPI Controller -->
<script>
  let facebook_user = "<?php echo base_url('index.php/marketingSocialmedia/FacebookAPI/usernameFacebookAPI'); ?>";
  $.ajax({
    async: false,
    type: 'GET',
    url: facebook_user,

    success: function(data) {
      $("#face_user").html(data.name);
    }

  });

  let user_posts = "<?php echo base_url('index.php/marketingSocialmedia/FacebookAPI/postsFacebookAPI'); ?>";
  $.ajax({
    async: false,
    type: 'GET',
    url: user_posts,

    success: function(data) {
      // Set the today and last month posts
      var date_today = new Date();
      var currentDay = date_today.getDate();
      var currentYear = date_today.getFullYear();
      var currentMonth = date_today.getMonth();
      var todayPosts = 0;
      var lastMonthPosts = 0;
      for (var post in data) {
        // Check if the response contains the date
        if(data[post].created_time){
          var liked_date = data[post].created_time.date;
          var month = new Date(liked_date).getMonth();
          var year = new Date(liked_date).getFullYear();
          var day = new Date(liked_date).getDate();
          if (currentYear == year && currentMonth == month){
            lastMonthPosts += 1;
            $('#this_month_posts').html(lastMonthPosts);            
          }
        }
      }
      $('#total_posts').html(data.length);
    }

  });

  let user_likes = "<?php echo base_url('index.php/marketingSocialmedia/FacebookAPI/likesFacebookAPI'); ?>";
  $.ajax({
    async: false,
    type: 'GET',
    url: user_likes,

    success: function(data) {
      $("#face_likes").html(data.fan_count)
      $("#total_likes").html(data.fan_count)
    }

  });

  let user_engagements = "<?php echo base_url('index.php/marketingSocialmedia/FacebookAPI/engagementFacebookAPI'); ?>";
  $.ajax({
    async: false,
    type: 'GET',
    url: user_engagements,

    success: function(data) {
      var engagement = (data !='') ? data : "0";
      $("#face_engagements").html(engagement)
    }

  });

  var userReviews;
  let user_reviews = "<?php echo base_url('index.php/marketingSocialmedia/FacebookAPI/reviewsFacebookAPI'); ?>";
  $.ajax({
    async: false,
    type: 'GET',
    url: user_reviews,

    success: function(data) {
      // Set the today and last month posts
      userReviews = data;
    }

  });

  let user_stars = "<?php echo base_url('index.php/marketingSocialmedia/FacebookAPI/starsFacebookAPI'); ?>";
  $.ajax({
    async: false,
    type: 'GET',
    url: user_stars,

    success: function(data) {
      // Set the today and last month posts
      var stars = (data !='') ? data : "0";
      $("#face_reviews").html(stars)
    }

  });
</script>



<script>
  var setupSocialBtn = document.querySelector("#setupSocialBtn");

  setupSocialBtn.addEventListener("click", function(e) {
    e.preventDefault();
    $("#setup-social-modal").modal('show');
  });

  function attachUri(uri, name) {
    var options = 'toolbar=no, menubar=no, width=600, height=700, top=100, left=100';

    window.open(uri, name, options);
  }

  // // // Auto save the Instgram report
  // function autoSaveInstagramReport() {
  //   // event.preventDefault();

  //   var formData = new FormData();

  //   formData.append("user_insta", $("#user_insta").text());
  //   formData.append("followers_insta", $("#followers_insta").text());
  //   formData.append("posts_insta", $("#posts_insta").text());
  //   formData.append("following_insta", $("#following_insta").text());
  //   formData.append("instagram_id", $("#instagram_id").val());

  //   let link_insta = "<?php echo base_url('index.php/marketingSocialmedia/socialMediaReports/Instagram_Report/save_instagram_report'); ?>";

  //   $.ajax({
  //     async: false,
  //     type: 'get',
  //     url: link_insta,
      
  //     success: function(data) {
  //       // console.log('Saving')
  //       return true
  //     }

  //   });
  // }

  // setTimeout(autoSaveInstagramReport, 5000);


  // // // Auto save the Twitter report
  // function autoSaveTwitterReport() {
  //   // event.preventDefault();

  //   var formData = new FormData();

  //   formData.append("user_username", $("#user_username").text());
  //   formData.append("user_followers", $("#user_followers").text());
  //   formData.append("user_tweet", $("#user_tweet").text());
  //   formData.append("user_following", $("#user_following").text());


  //   let link_twitter = "<?php echo base_url('index.php/marketingSocialmedia/socialMediaReports/TwitterReport/saveTwitterReport'); ?>";

  //   $.ajax({
  //     async: false,
  //     type: 'get',
  //     url: link_twitter,

  //     success: function(data) {
  //       console.log("Saved");
  //     }

  //   });
  // }

  // setTimeout(autoSaveTwitterReport, 5000);

  // // // Auto save the Facebook report
  // function autoSaveFacebookReport() {
  //   // event.preventDefault();

  //   var formData = new FormData();

  //   formData.append("face_user", $("#face_user").text());
  //   formData.append("face_posts", $("#face_posts").text());
  //   formData.append("face_likes", $("#face_likes").text());
  //   formData.append("face_followers", $("#face_followers").text());


  //   let link_facebook = "<?php echo base_url('index.php/marketingSocialmedia/FacebookReport/saveFacebookReport'); ?>";

  //   $.ajax({
  //     async: false,
  //     type: 'get',
  //     url: link_facebook,
      
  //     success: function(data) {
  //       return true;
  //     }

  //   });
  // }

  // setTimeout(autoSaveFacebookReport, 5000);
</script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="<?php echo base_url('assets/js/facebookChart.js') ?>"></script>
<!-- <script src="<?php echo base_url('assets/js/tripadvisor.js') ?>"></script> -->
<!-- <script src="<?php echo base_url('assets/js/pinterest.js') ?>"></script> -->
<script src="<?php echo base_url('assets/js/instagram.js') ?>"></script>
<script src="<?php echo base_url('assets/js/twitter.js') ?>"></script>

</script>