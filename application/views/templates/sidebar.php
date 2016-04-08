 <div id="sidebar-wrapper" class="col-md-2">
            <div id="sidebar">
                <ul class="nav list-group"  style="font-weight: 600;">
                    <li>
                        <a class="list-group-item" href="#">Buscar: <i class="fa fa-search"></i> <input id="buscar"/></a>
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