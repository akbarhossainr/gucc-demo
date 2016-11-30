<?php include'inc/header.php' ?>

<section id="blog">
  <div class="container no-padding">
    <div class="col-lg-9">
      <div class="left-col">
        <div class="col-lg-12">
          <h2>Featured Notice</h2>
          <legend></legend>
          <div class="notice-board">
            <div class="media">
              <div class="media-left gallery-date">
                <h2>22<sup>nd</sup><br>AUG</h2>
                <h5>2015</h5>
              </div>
              <div class="media-body notice-body">
                <h3 class="media-heading">Holiday notice for coming Eid-ul-Adha</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus eveniet accusantium alias nam nostrum deleniti fugit doloremque iure unde rerum! <a href="">read more...</a>
              </div>
            </div>
            <hr>
            <div class="media">
              <div class="media-left gallery-date">
                <h2>25<sup>th</sup><br>SEP</h2>
                <h5>2015</h5>
              </div>
              <div class="media-body notice-body">
                <h3 class="media-heading">Pay your club fee before 10th OCTOBER 2015</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat sint dolores aspernatur at error reiciendis quisquam doloribus rerum, ipsa dolore explicabo aperiam? Dolor iste ratione ipsum sequi quos, excepturi cum! <a href="">read more...</a>
              </div>
            </div>
            <hr>
            <div class="media">
              <div class="media-left gallery-date">
                <h2>02<sup>nd</sup><br>OCT</h2>
                <h5>2015</h5>
              </div>
              <div class="media-body notice-body">
                <h3 class="media-heading">Holiday notice for coming Eid-ul-Adha</h3>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum magnam deleniti perferendis autem ullam sapiente praesentium aut at officiis laboriosam quo sed tenetur ipsam odit est ut repellat aliquid minima, veniam labore! Minima laudantium, commodi earum? Pariatur, unde dolor distinctio. <a href="">read more...</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="text-center">
          <br><br>
          <button class="btn btn-default btn-sm">Load more...</button>
          </div>
        </div>


      </div>
    </div>

    <div class="col-lg-3 no-padding">
      <div class="right-col">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Quick Search Notice</h4>
          </div>
          <div class="panel-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search notice ...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Search</button>
              </span>
            </div><!-- /input-group -->
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Recent Notice</h4>
          </div>
          <div class="panel-body">
            <div class="list-group">
              <a href="#" class="list-group-item">Dapibus ac facilisis in <span class="label label-danger pull-right">New</span></a>
              <a href="#" class="list-group-item">Cras justo odio</a>
              <a href="#" class="list-group-item">Morbi leo risus</a>
              <a href="#" class="list-group-item">Porta ac consectetur ac <span class="label label-warning pull-right">Important</span></a>
              <a href="#" class="list-group-item">Vestibulum at eros</a>
            </div>
          </div>
        </div>

        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">Calender</h4>
          </div>
          <div class="panel-body">
            <!-- Responsive calendar - START -->
            <div class="responsive-calendar">
              <div class="controls">
                  <a class="pull-left" data-go="prev"><div class="btn btn-default btn-link"><i class="fa fa-chevron-left"></i></div></a>
                  <h4><span data-head-year></span> <span data-head-month></span></h4>
                  <a class="pull-right" data-go="next"><div class="btn btn-default btn-link"><i class="fa fa-chevron-right"></i></div></a>
              </div><br>
              <div class="day-headers">
                <div class="day header">Mon</div>
                <div class="day header">Tue</div>
                <div class="day header">Wed</div>
                <div class="day header">Thu</div>
                <div class="day header">Fri</div>
                <div class="day header">Sat</div>
                <div class="day header">Sun</div>
              </div>
              <div class="days" data-group="days">
                
              </div>
            </div>
            <!-- Responsive calendar - END -->
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include'inc/footer.php' ?>