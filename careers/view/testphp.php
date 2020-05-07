<?php
                        function getVideos()
                        {
                            $cnnx = new PDO('mysql:dbname=ffd;host=localhost', 'yellowtree', 'yellow');
                            $sql = $cnnx->prepare("SELECT * FROM videos");
                            $sql->execute();
                            $results = $sql->fetchAll();
                            $cnnx = null;
                            return $results;
                        }

                        print_r(getVideos());


                        ?>