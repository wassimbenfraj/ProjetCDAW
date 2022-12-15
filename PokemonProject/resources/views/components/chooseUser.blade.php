    <div class="box-table table-responsive" id="userSelect">
    <table class="table upcoming-projects">
        <thead>
        <tr>
            <th>
                <span>Pseudo</span>
            </th>
            <th>
                <span>Niveau</span>
            </th>
            <th>
                <span>Combats Joués</span>
            </th>
            <th>
                <span>Combats Gagnés</span>
            </th>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $index=>$user)
            @if($index % 2 == 0)
                    <tr class="color-light" onclick="chooseUser({{$user->id}})">
                        <td><span>{{$user->name}}</span></td>
                        <td><span class="color-green">{{$user->level}}</span></td>
                        <td><span class="color-danger">{{count($user->combats)}}</span></td>
                        <td><span class="color-info">{{count($user->combatsWon)}}</span></td>
                    </tr>
            @else
                    <tr onclick="chooseUser({{$user->id}})">
                        <td><span>{{$user->name}}</span></td>
                        <td><span class="color-green">{{$user->level}}</span></td>
                        <td><span class="color-danger">{{count($user->combats)}}</span></td>
                        <td><span class="color-info">{{count($user->combatsWon)}}</span></td>
                    </tr>
            @endif
        @endforeach
        </tbody>
    </table>
</div>
