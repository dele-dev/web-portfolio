<?php

$award_List = getAllAward($user_profile); 

?>
<div class="awards-recognitions">
                    <h2 class="main-common-title">Awards and Recognitions
                    </h2>
                    <div class="awards-recognitions-main">
                      <ul class="list-unstyled">
                      <?php
                        foreach ($award_List as $awards => $value){
                      ?>  
                      <li>
                          <a href="about.php#" class="d-block w-100">
                            <div class="awards-item">
                              <div class="award-name">
                                <div class="icon">
                                  i
                                </div>
                                <div class="text">
                                  <h4 class="title"><?php echo $award_List[$awards][4]; ?></h4>
                                  <p class="year"><?php echo $award_List[$awards][3]; ?></p>
                                </div>
                              </div>
                              <div class="winner-tag">
                                <h4 class="title">
                                  <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                      d="M6 9C6 10.5913 6.63214 12.1174 7.75736 13.2426C8.88258 14.3679 10.4087 15 12 15C13.5913 15 15.1174 14.3679 16.2426 13.2426C17.3679 12.1174 18 10.5913 18 9C18 7.4087 17.3679 5.88258 16.2426 4.75736C15.1174 3.63214 13.5913 3 12 3C10.4087 3 8.88258 3.63214 7.75736 4.75736C6.63214 5.88258 6 7.4087 6 9Z"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M12 15L15.4 20.89L16.998 17.657L20.596 17.889L17.196 12" stroke-width="1.5"
                                      stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.80234 12L3.40234 17.89L7.00034 17.657L8.59834 20.889L11.9983 15"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                  </svg>
                                  <?php echo $award_List[$awards][2]; ?>
                                </h4>
                              </div>
                              <div class="project-btn">
                                <span>
                                   Project
                                 
                                </span>
                              </div>
                            </div>
                          </a>
                        </li>
                        <?php
                        }
                        ?>
                      </ul>
                    </div>
                  </div>