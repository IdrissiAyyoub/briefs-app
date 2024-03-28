<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Dashboard | Korsat X Parmaga</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#main">
                        <span class="icon">
                            <ion-icon name="code-slash-outline"></ion-icon>
                        </span>
                        <span class="title">BriefSolicode</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>





                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="cardBox">
                <div class="card" style="background-color: #A8E363;">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Finished</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>

                <div class="card" style="background-color: #EBC85E;">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">To Do</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>

                <div class="card" style="background-color: #51BBEA;">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">In Progress</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>

                <div class="card" style="background-color: #F97373;">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Passed</div>
                    </div>

                    <div class="iconBx">
                        <ion-icon name="book-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Historique</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Brief</td>
                                <td>Date start:</td>
                                <td>Date end:</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                            <tr>
                                <td>BLA BLA BLA</td>
                                <td>00/00/2000</td>
                                <td>00/00/2000</td>
                                <td><span class="status delivered">Finished</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Today's briefs</h2>
                    </div>
                    <div class="custom-card">
                        <div class="card-header">
                            <h2>FARHA Event Project</h2>
                        </div>
                        <div class="countdown">
                            <p class="countdown-label">It will end in :</p>
                            <ul class="countdown-list">
                                <li>
                                    <div class="countdown-item">
                                        <div class="countdown-number">02 </div>
                                        <span class="countdown-unit">Days</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="countdown-item">
                                        <div class="countdown-number">05</div>
                                        <span class="countdown-unit">Hours</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="countdown-item">
                                        <div class="countdown-number">56</div>
                                        <span class="countdown-unit">Min</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="countdown-item">
                                        <div class="countdown-number">26</div>
                                        <span class="countdown-unit">Sec</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <div class="attachment-btn">
                                <p>Attachment</p>
                                <ion-icon name="arrow-down-outline">
                            </div>
                            <div class="">
                                <select name="" id="status" class="delete-btn">status
                                    <option value="finished">Finished</option>
                                    <option value="todo">To Do</option>
                                    <option value="inprogress">In Progress</option>
                                </select>
                            </div>

                        </div>
                        <div class="input-div one" id="urlInputContainer">
                            <div class="div">
                                <label for="brief_title"></label>
                                <input type="text" class="input" id="brief_title" name="brief_title"
                                    placeholder="Enter the URL">
                            </div>
                                                    <button class="DoneButton">DONE</button>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script>
        document.getElementById('status').addEventListener('change', function () {
            var selectElement = this;
            var selectedOption = selectElement.options[selectElement.selectedIndex].value;
            var color;

            switch (selectedOption) {
                case 'finished':
                    color = 'green';
                    break;
                case 'todo':
                    color = 'orange';
                    break;
                case 'inprogress':
                    color = 'blue';
                    break;
                case 'notcompleted':
                    color = 'red';
                    break;
                default:
                    color = '';
            }

            selectElement.style.backgroundColor = color;
            if (selectedOption == 'finished') {
                document.getElementById('urlInputContainer').style.display = 'block'
            } else {
                document.getElementById('urlInputContainer').style.display = 'none'
            }

        });

    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>