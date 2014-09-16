<?php echo get_core_vars( 'lmenu' );?>
<section id="content">
    <section class="vbox">
        <?php echo get_core_vars( 'inner_head' );?>
        <section class="scrollable" id="pjax-container">
            <header>
                <div class="row b-b m-l-none m-r-none">
                    <div class="col-sm-4">
                        <h4 class="m-t m-b-none"><?php echo get_page('title');?></h4>
                        <p class="block text-muted"><?php echo get_page('description');?></p>
                    </div>
                </div>
            </header>
            <section class="vbox">
                <section class="wrapper"> <?php echo output('notice');?> 
                	<div class="row">
                    	<div class="col-lg-5">
                	<section class="panel">
                            <div class="panel-heading">
                            Attention, soyez prudent !!!
                            </div>
                            <div class="panel-body">
                                <?php output('notice');?>
                                <p>Vous êtes sur le point de supprimer un module. Cette action est irreversible, en outre il est probable que d'autres modules et/ou pages ne s'affichent plus correctement. <br /><br />Veuillez confirmer votre action pour continuer.</p>
                                    <form method="post">
                                        <div>
                                                <input type="hidden" name="module_namespace" value="<?php echo $module['namespace'];?>">
                                                <input type="submit" class="btn btn-sm btn-danger" value="Je confirme mon action">
                                        </div>
                                    </form>
                            </div>
                        </section>
                        </div>
                        </div>
                    </section>
                </section>
            </section>
        </section>
    </section>
    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> </section>