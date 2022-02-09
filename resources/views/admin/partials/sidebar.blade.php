

<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse" style="overflow-y:scroll;">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M21 21h-8V6a3 3 0 0 1 3-3h5a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1zm-10 0H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h5a3 3 0 0 1 3 3v15zm0 0h2v2h-2v-2z"/></svg>
                        <span>REGISTRATION</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{route('machineregistration')}}">Machine Registration</a></li>
						<li><a href="{{route('registration')}}">Operator Registration</a></li>
                        <li><a href="{{route('sectionregistration')}}">Section Registration</a></li>
                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="">
                        <i class="fa fa-th"></i>
                        <span>Lists</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('machine')}}">Machine List</a></li>
                        <li><a href="{{route('employeelist')}}">Operator List</a></li>
                        <li><a href="{{route('section')}}">Section List</a></li>
                        <li><a href="{{route('placements')}}">placements</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-tasks"></i>
                        <span>Store</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('componentslist')}}">Components List</a></li>
                        <li><a href="{{route('repairmachinelist')}}">Repair Machine List</a></li>
                        
                        
						
                    </ul>
                </li>
                <li>
                    <a href="{{route('newpurchagemachinelist')}}">
                        <i class="fa fa-bullhorn"></i>
                        <span>New Purchage Machine </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('repairingcentre')}}">
                        <i class="fa fa-bullhorn"></i>
                        <span>Repairing Centre </span>
                    </a>
                </li>
                
                <li>
                    <a href="{{route('invalidmachine')}}">
                        <i class="fa fa-user"></i>
                        <span>Invalid Machine</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('placementregistration')}}">
                        <i class="fa fa-bullhorn"></i>
                        <span>Placement Registration </span>
                    </a>
                </li>
                
            </ul> 
         </div>
        <!-- sidebar menu end-->