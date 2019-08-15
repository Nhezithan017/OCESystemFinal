<template>
    <div class="container justify-content-center">
        <div class="row">
             <div class="col-sm-12">
                 <div id="carouselId" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                         <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                         <li data-target="#carouselId" data-slide-to="1"></li>
                         <li data-target="#carouselId" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner" role="listbox">
                         <div class="carousel-item active">
                             <img data-src="holder.js/900x500/auto/#777:#555/text:First slide" alt="First slide">
                             <div class="carousel-caption d-none d-md-block">
                                 <h3>Title</h3>
                                 <p>Description</p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img data-src="holder.js/900x500/auto/#666:#444/text:Second slide" alt="Second slide">
                             <div class="carousel-caption d-none d-md-block">
                                 <h3>Title</h3>
                                 <p>Description</p>
                             </div>
                         </div>
                         <div class="carousel-item">
                             <img data-src="holder.js/900x500/auto/#666:#444/text:Third slide" alt="Third slide">
                             <div class="carousel-caption d-none d-md-block">
                                 <h3>Title</h3>
                                 <p>Description</p>
                             </div>
                         </div>
                     </div>
                     <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="sr-only">Next</span>
                     </a>
                 </div>
             </div>
            <div class="col-sm-12">
                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
export default {
    
}
</script>

