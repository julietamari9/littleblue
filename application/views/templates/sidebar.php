 <div id="sidebar-wrapper" class="col-md-2">
            <div id="sidebar">
                <ul class="nav list-group"  style="font-weight: 600;">
                    <li>
                        <a class="list-group-item" href="#"><i class="icon-home icon-1x"></i>Buscar: <input name="buscar_colegio" id="buscar"/></a>
                    </li>
                    <li>
                        <?php 
                        foreach (range('A', 'Z') as $letra) {
							    echo "<span>" . $letra . "</span>";
							}
							?>
                    </li>
                </ul>
            </div>
        </div>