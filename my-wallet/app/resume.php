<?php

    //Limpiar despues este codigo... (Pasar a POO, modular, acortar nombres de variables)

    session_start();
    include('db_connect.php');

    // echo 'Database connection: '.$status.'<br>'; //Visualize database conection status 

        //Querys to te DB
        $user = $_SESSION['user'];
        $query= "SELECT * FROM $user";
        $sql= mysqli_query($con, $query);

        //Set variables for operations
        $daily_income = array();
        $monthly_income = array();
        $yearly_income = array();
        $daily_outcome = array();
        $monthly_outcome = array();
        $yearly_outcome = array();

        //For total balance
        $all_income = array();
        $all_outcome = array();

        //Store and filter values
        while( $row = mysqli_fetch_assoc($sql)){

            //INCOMES
            if($row['type']=='income')
            {
                $all_income[] = $row['mount'];
                //Corregir datos para comparar con variables!!!
                if(($row['date'] > '2019-12-31') AND ($row['date'] < '2021-1-1'))
                {
                    $yearly_income[] = $row['mount'];

                    if(($row['date'] >= '2020-10-1') AND ($row['date'] <= '2020-10-31'))
                    {
                        $monthly_income[] = $row['mount'];

                        if($row['date'] == date('Y-m-d'))
                        {
                            $daily_income[] = $row['mount'];
                        }
                    }
                }
            }

            // //OUTCOMES
            if($row['type']=='outcome')
            {
                $all_outcome[] = $row['mount'];
                //Corregir datos para comparar con variables!!! ( Sacar fechas de texto plano y hacerlas dinamicas)
                if(($row['date'] > '2019-12-31') AND ($row['date'] < '2021-1-1'))
                {
                    $yearly_outcome[] = $row['mount'];
                    
                    if(($row['date'] >= '2020-10-1') AND ($row['date'] <= '2020-10-31'))
                    {
                        $monthly_outcome[] = $row['mount'];

                        if($row['date'] == date('Y-m-d'))
                        {
                            $daily_outcome[] = $row['mount'];
                        }
                    }
                }
            }
        }

        // TO TEST IF THE LOOPS ABOVE ARE WORKING
        //incomes-W
        // echo "Daily income:<br>";
        // print_r($daily_income);
        // echo '<br>';
        // echo "Monthly income:<br>";
        // print_r($monthly_income);
        // echo '<br>';
        // echo "Yearly income:<br>";
        // print_r($yearly_income);
        // echo '<br>';
        // //Outcomes
        // echo "Daily Outcome:<br>";
        // print_r($daily_outcome);
        // echo '<br>';
        // echo "Monthly Outcome:<br>";
        // print_r($monthly_outcome);
        // echo '<br>';
        // echo "Yearly Outcome:<br>";
        // print_r($yearly_outcome);
        // echo '<br>';

        //PASAR ESTO DESPUES A POO.......

        //INCOMES
            //Total Day
            $total_day_income = 0;
            for($i = 0;  $i < count($daily_income); $i++)
            {
                $total_day_income = $total_day_income + $daily_income[$i];
            }
            // echo 'Total day income<br>';
            // echo $total_day_income.'<br>';
            //Total month
            $total_month_income = 0;
            for($i = 0;  $i < count($monthly_income); $i++)
            {
                $total_month_income = $total_month_income + $monthly_income[$i];
            }
            // echo 'Total month income<br>';
            // echo $total_month_income.'<br>';
            //Total Year
            $total_year_income = 0;
            for($i = 0;  $i < count($yearly_income); $i++)
            {
                $total_year_income = $total_year_income + $yearly_income[$i];
            }
            // echo 'Total year income<br>';
            // echo $total_year_income.'<br>';

        
        //OUTCOMES
            //Total day
            $total_day_outcome = 0;
            for($i = 0;  $i < count($daily_outcome); $i++)
            {
                $total_day_outcome = $total_day_outcome + $daily_outcome[$i];
            }
            // echo 'Total day outcome<br>';
            // echo $total_day_outcome.'<br>';

            //Total month
            $total_month_outcome = 0;
            for($i = 0;  $i < count($monthly_outcome); $i++)
            {
                $total_month_outcome = $total_month_outcome + $monthly_outcome[$i];
            }
            // echo 'Total month outcome<br>';
            // echo $total_month_outcome.'<br>';

            //Total year
            $total_year_outcome = 0;
            for($i = 0;  $i < count($yearly_outcome); $i++)
            {
                $total_year_outcome = $total_year_outcome + $yearly_outcome[$i];
            }
            // echo 'Total year outcome<br>';
            // echo $total_year_outcome.'<br>';


            //FOR TOTAL BALANCES
            $total_outcome = 0;
            for($i = 0;  $i < count($all_outcome); $i++)
            {
                $total_outcome = $total_outcome + $all_outcome[$i];
            }

            $total_income = 0;
            for($i = 0;  $i < count($all_income); $i++)
            {
                $total_income = $total_income + $all_income[$i];
            }

            $day_balance = $total_day_income - $total_day_outcome;
            $month_balance = $total_month_income - $total_month_outcome;
            $year_balance = $total_year_income - $total_year_outcome;

            $total_balance = $total_income - $total_outcome;

            if($total_balance < 0)
            {
                $color_output = 'red';
            }
            else
            {
                $color_output = 'seagreen';
            }

            // echo 'BALANCES: <br>';
            // echo 'Day balance: '.$day_balance.'<br>';
            // echo 'Month balance: '.$month_balance.'<br>';
            // echo 'Year balance: '.$year_balance.'<br>'; 
        
?>