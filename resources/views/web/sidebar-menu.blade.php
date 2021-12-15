<div class="thumbnail">
    <div class="caption">
        <div class="text-center"><img src="https://png.pngtree.com/element_pic/16/11/03/dda587d35b48fd01947cf38931323161.png" alt="" style="height:200px;width:200px;object-fit:cover;o-object-fit:cover;object-position:center;o-object-position:center"></div>
        <div class="text-center m-t" style="color: #f59217"><b>{{ auth()->user()->name }}</b></div>
        <nav class="m-t-lg">
            <ul class="nav">
                @if(\Auth::user()->hasRole('personal'))
                    <li role="presentation" class="active"><a href="#">Biodata</a></li>
                    <li role="presentation"><a href="#">Resume</a></li>
                    <li role="presentation"><a href="#">Feature</a></li>
                @else
                    <li><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li>
                        <a href="javascript:void(0)" id="btn-1" data-toggle="collapse" data-target="#submenu1" aria-expanded="false">My Company</a>
                        <ul class="nav collapse" id="submenu1" role="menu" aria-labelledby="btn-1">
                            <li><a href="{{ route('my-company.index') }}" style="padding-left:30px">Bio Perusahaan</a></li>
                            <li><a href="{{ route('expert.index') }}" style="padding-left:30px">Tenaga Ahli</a></li>
                            <li><a href="{{ route('job-field.index') }}" style="padding-left:30px">Bidang Kerja</a></li>
                            <li><a href="#" style="padding-left:30px">Peralatan</a></li>
                            <li><a href="#" style="padding-left:30px">Project</a></li>
                            <li><a href="#" style="padding-left:30px">Gallery Project</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Feature</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>