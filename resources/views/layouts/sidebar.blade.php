 <div class="offcanvas offcanvas-start" tabindex="-1" id="navOffcanvas">
     <script>
         const navTarget = 'target';
         $(function() {
             $(`.nav-${navTarget} b`).addClass('text-danger');
         });
     </script>
     <div class="offcanvas-body">
         <ul class="list-group list-group-flush">
             <li class="list-group-item nav-dashboard">

                 <a class="link-dark d-block" href="/">
                     <i class="bi bi-speedometer text-secondary me-2"></i><b>{{ __('Dashboard') }}</b>
                 </a>
             </li>

             <li class="list-group-item nav-support">
                 <a class="link-dark d-block" href="/retailers/">
                     <i class="bi bi-credit-card-2-front-fill text-secondary me-2"></i><b>Retailers</b>
                 </a>
             </li>
             <li class="list-group-item nav-support">
                 <a class="link-dark d-block" href="/visitors/">
                     <i class="bi bi-person-vcard-fill text-secondary me-2"></i><b>Visitors</b>
                 </a>
             </li>

             <li class="list-group-item nav-support">
                 <a class="link-dark d-block" href="/scans/">
                     <i class="bi bi-qr-code-scan text-secondary me-2"></i><b>scanQRCode</b>
                 </a>
             </li>

         </ul>
     </div>
     <div class="d-flex">
         <a href="#" class="d-block p-3 flex-grow-1 border-top rounded-0 link-dark">
             <i class="bi bi-person-circle text-warning me-2"></i>
             <b>{{ auth()->user()->user_name }}</b>
         </a>
         <form action="{{ route('logout') }}" method="post" class="d-block p-2 border-top border-start rounded-0">
             @csrf
             <button type="submit" class="btn border-0"><i class="bi bi-power text-danger"></i></button>
         </form>
     </div>
 </div>
