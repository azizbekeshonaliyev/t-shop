<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="lake.jpg" alt="...">
            <div class="carousel-caption">
                <h3  style="color: white">New York</h3>
                <p  style="color: white">We love the Big Apple!</p>
            </div>
        </div>
        <div class="item">
            <img src="tuscany428041.jpg" alt="...">
            <div class="carousel-caption">
                <h3 style="color: white">New York</h3>
                <p  style="color: white"> We love the Big Apple!</p>
            </div>
        </div>
        <div class="item">
            <img src="tuscany428041.jpg" alt="...">
            <div class="carousel-caption">
                <h3 style="color: white">New York</h3>
                <p  style="color: white"> We love the Big Apple!</p>
            </div>
        </div>
        <div class="item">
            <img src="tuscany428041.jpg" alt="...">
            <div class="carousel-caption">
                <h3 style="color: white">New York</h3>
                <p  style="color: white"> We love the Big Apple!</p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<style>
    .carousel-inner > .item > img, .carousel-inner > .item > a > img {
        display: block;
        height: 800px;
        min-width: 100%;
        width: 100%;
        max-width: 100%;
        line-height: 1;
    }
</style>