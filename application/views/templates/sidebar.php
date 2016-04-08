 <div id="sidebar-wrapper" class="col-md-2">
            <div id="sidebar">
                <ul class="nav list-group"  style="font-weight: 600;">
                    <li>
                        <a class="list-group-item" href="#"><i class="icon-home icon-1x"></i>Buscar: <input id="buscar"/></a>
                    </li>
                    <li>
                        <?php 
                        foreach (range('A', 'Z') as $letra) {
							    echo "<span class='letra' data-letra='" . $letra . "'>" . $letra . "</span>";
							}
							?>
                    </li>
                </ul>
            </div>
        </div>