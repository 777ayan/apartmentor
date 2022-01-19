<style>

.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}
.site-footer hr
{
  border-top-color:#bbb;
  opacity:0.5
}
.site-footer hr.small
{
  margin:20px 0
}
.site-footer h6
{
  color:#fff;
  font-size:16px;
  text-transform:uppercase;
  margin-top:5px;
  letter-spacing:2px
}
.site-footer a
{
  color:#737373;
}
.site-footer a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links
{
  padding-left:0;
  list-style:none
}
.footer-links li
{
  display:block
}
.footer-links a
{
  color:#737373
}
.footer-links a:active,.footer-links a:focus,.footer-links a:hover
{
  color:#3366cc;
  text-decoration:none;
}
.footer-links.inline li
{
  display:inline-block
}

.copyright-text
{
  margin:0
}


</style>


<footer class="site-footer">
    <div class="container">
        <div class="row">
        <div class="col-sm-12 col-md-6">
          <h6>About</h6>
          <p class="text-justify">Apartmentor is an online property sell or rent website. It is very user friendly. Users can get registered as Client or Agent</p>
        </div>

        <div class="col-xs-6 col-md-3">
          <h6>Quick Links</h6>
          <ul class="footer-links">
            <li style="float: left;"><a href="{{route('contact.index')}}">Contact Us</a></li>
            <li style="float: left;"><a href="{{route('property.index')}}">Property List</a></li>
            <li style="float: left;"><a href="{{route('agentinfo.index')}}">Agent List</a></li>
          </ul>
        </div>
      </div>
      <hr>
    </div>

      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by Daffodil International University.
          </p>
        </div>
      </div>

</footer>