<!-- BEGIN: Content -->
<div class="content">
    <!-- BEGIN: Top Bar -->
    <div class="top-bar">

        {{ $breadcrumb }}

        {{ $search }}
 
        {{ $notifications }}

        {{ $account_menu }}
        
    </div>
    <!-- END: Top Bar -->
    
    {{ $slot }}
    
</div>
<!-- END: Content -->