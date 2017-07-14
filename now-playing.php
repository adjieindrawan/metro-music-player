<?php require_once('header.php'); ?>
<?php require_once('aside.php'); ?>
<section id="content">
    <section class="hbox stretch">
        <section>
            <section class="vbox">
                <section class="scrollable padder-lg bg-black p-b" id="bjax-target">
                    <div class="row">
	                    <div class="col-md-7" id="video-container">
                            <h3 class="title">// NOW <span class="white">PLAYING</span></h3>
							<div class="playing">
                                <div id="waveform">
                                </div>
                                <div class="bottom-control-ply padder">
                                    <div class="pull-left">
                                        <a data-toggle="class" href="#">
                                            <i class="fa fa-heart-o text"></i>
                                            <i class="fa fa-heart text-active text-danger"></i>
                                        </a>
                                        <a data-toggle="class" href="#">
                                            <i class="fa fa-share-alt text"></i>
                                            <i class="fa fa-share-alt text-active text-info"></i>
                                        </a>
                                        <a data-toggle="class" href="#">
                                            <i class="fa fa-star-o text"></i>
                                            <i class="fa fa-star text-active text-warning"></i>
                                        </a>                                         
                                    </div> 
                                    <div class="pull-right">
                                        <a href="#">
                                            <i class="fa fa-language text-info" aria-hidden="true"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-picture-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#">
                                            <img class="icon-md" src="./images/cast.png">
                                        </a>
                                        <a href="#">
                                            <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                                        </a>                                                                               
                                    </div>                                                                       
                                </div>
                            </div>
	                    </div>
                        <div class="col-md-5">
                            <h3 class="title">// PLAY<span class="white">LIST</span></h3>
                            <div class="owl-nome owl-carousel owl-theme playlist">
                                <div class="item">
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/pl1.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Wherever You Will Go</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt1"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt1">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> The Calling</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart-o text"></i>
                                                        <i class="fa fa-heart text-active text-danger"></i>
                                                    </a>
                                                    935                                          
                                                </li>
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/pl2.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Titanium</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt2"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt2">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> David Guetta</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart text text-danger"></i>
                                                        <i class="fa fa-heart-o text-active "></i>
                                                    </a>
                                                    935                                          
                                                </li>                                        
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                                <li><i class="fa fa-language"></i></li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/m3.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Monokrom</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt3"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt3">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> Tulus</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart-o text"></i>
                                                        <i class="fa fa-heart text-active text-danger"></i>
                                                    </a>
                                                    935                                          
                                                </li>
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                                <li><i class="fa fa-language"></i></li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/pl4.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Plastik Kita</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt4"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt4">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> Sore</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart-o text"></i>
                                                        <i class="fa fa-heart text-active text-danger"></i>
                                                    </a>
                                                    935                                          
                                                </li>
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                            </ul>                                    
                                        </div>
                                    </div>                                     
                                </div>
                                <div class="item">
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/m1.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Wherever You Will Go</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt1"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt1">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> The Calling</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart-o text"></i>
                                                        <i class="fa fa-heart text-active text-danger"></i>
                                                    </a>
                                                    935                                          
                                                </li>
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/pl2.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Titanium</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt2"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt2">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> David Guetta</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart text text-danger"></i>
                                                        <i class="fa fa-heart-o text-active "></i>
                                                    </a>
                                                    935                                          
                                                </li>                                        
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                                <li><i class="fa fa-language"></i></li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/m3.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Monokrom</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt3"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt3">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> Tulus</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart-o text"></i>
                                                        <i class="fa fa-heart text-active text-danger"></i>
                                                    </a>
                                                    935                                          
                                                </li>
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                                <li><i class="fa fa-language"></i></li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                    <div class="playlist-item">
                                        <img class="ply pull-left" src="./images/pl4.jpg">
                                        <div class="ply-info">
                                            <h3 class="ply-song"> <a href="#">Plastik Kita</a><span class="pull-right white"><a href="#" data-toggle="dropdown" data-target="#dt4"><i class="icon-options icons"></i></a></span></h3>
                                            <div class="options pull-right" id="dt4">
                                              <ul class="dropdown-menu bg-gradient" role="menu" aria-labelledby="options-ply">
                                                <span class="caret-up"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                                                <li class="menu-item"><a href="#">PRIORITY <span class="pull-right"><i class="fa fa-star" aria-hidden="true"></i></span></a></li>
                                                <li class="menu-item"><a href="#">DELETE <span class="pull-right"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SAVE TO MY SONGS <span class="pull-right"><i class="fa fa-save" aria-hidden="true"></i></a></li>
                                                <li class="menu-item"><a href="#">SHARE <span class="pull-right"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                              </ul>                            
                                            </div>
                                            <a href="#"><p class="ply-artist"> Sore</p></a>
                                            <ul class="ply-more">
                                                <li><i class="icon icon-clock"></i> 4:67</li>
                                                <li>
                                                    <a data-toggle="class" href="#">
                                                        <i class="fa fa-heart-o text"></i>
                                                        <i class="fa fa-heart text-active text-danger"></i>
                                                    </a>
                                                    935                                          
                                                </li>
                                                <li><i class="icon icon-microphone"></i> 935</li>
                                            </ul>                                    
                                        </div>
                                    </div>                                     
                                </div>                                
                            </div>                                                                                 
                        </div>                        
                    </div>                		
                </section>
                <?php require_once('footer.php'); ?>
