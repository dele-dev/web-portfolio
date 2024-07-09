<div class="frequently-asked-questions">
                      <h2 class="main-common-title">Frequently Asked Questions
                      </h2>
                      <div class="frequently-asked-questions-main">
                        <div class="accordion" id="accordionExample">
                        <?php

                          $faq_list = getAllFaq($user_profile); 

                          $counter = 0;

                          foreach ($faq_list as $faqs => $value){
                            $counter += 1;
                          ?>
                          <div class="accordion-item">
                            <h4 class="accordion-header" id="heading-<?php echo $counter ; ?>">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse-<?php echo $counter ; ?>" aria-expanded="true" aria-controls="collapse-<?php echo $counter ; ?>">
                                What does a product designer need to know?
                                <span class="ms-auto">
                                  <span class="icon ms-4">
                                    <img class="icon-plus" src="assets/img/icons/plus.svg" alt="plus">
                                    <img class="icon-minus d-none" src="assets/img/icons/minus.svg" alt="minus">
                                  </span>
                                </span>
                              </button>
                            </h4>
                            <div id="collapse-<?php echo $counter ; ?>" class="accordion-collapse collapse show" aria-labelledby="heading-<?php echo $counter ; ?>"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>I'm here to help if you're searching for a product designer to bring your idea to
                                  life
                                  or a design partner to help take your business to the next level.</p>
                              </div>
                            </div>
                          </div>
                          <?php
                          }
                          ?>
                          
                        </div>
                      </div>
                    </div>