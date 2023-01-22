<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="<?= BASEURL ?>/home/index"><img src="<?= BASEURL ?>/img/footer-logo.png" alt=""></a>
                    </div>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Kategori</h6>
                    <ul class="p-0 m-0">
                        <li><a href="#">Harian</a></li>
                        <li><a href="#">Ekonomi</a></li>
                        <li><a href="#">Bisnis</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Entertaiment</a></li>
                        <li><a href="#">Olahraga</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>NewLetter</h6>
                    <div class="footer__newslatter">
                        <p></p>
                        <form action="#">
                            <input type="text" placeholder="Your email" class="form-control bg-light p-2">
                            <button type="submit"><span class="icon_mail_alt"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <p>Copyrighht &copy; 2022 BNews
                        | All right reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= BASEURL ?>/auth/logout">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= BASEURL ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= BASEURL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= BASEURL ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= BASEURL ?>/js/user.js"></script>
<script src="<?= BASEURL ?>/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= BASEURL ?>/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= BASEURL ?>/js/demo/chart-area-demo.js"></script>
<script src="<?= BASEURL ?>/js/demo/chart-pie-demo.js"></script>
</body>