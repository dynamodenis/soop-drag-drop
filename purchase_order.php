<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge,Chrome=11">
    <meta name="keywords" content="Purchase Orders PDF">
    <title>Purchase Order PDF</title>
    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
        }

        * {
            box-sizing: border-box;
            outline: none;
        }

        html {
            font-size: 62.5%;
            scroll-behavior: smooth;
        }

        body {
            font-family: "Gotham", Arial, Helvetica, sans-serif, -apple-system, BlinkMacSystemFont, Roboto, Oxygen, Ubuntu, Cantarell;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent;
        }

        .fs-1 {
            font-size: 1rem;
        }

        .fs-1-2 {
            font-size: 1.2rem;
        }

        .fs-1-3 {
            font-size: 1.3rem;
        }

        .fs-1-4 {
            font-size: 1.4rem;
        }

        .fs-1-5 {
            font-size: 1.5rem;
        }

        .fs-1-6 {
            font-size: 1.6rem;
        }

        .fs-1-7 {
            font-size: 1.7rem;
        }

        .fs-1-8 {
            font-size: 1.8rem;
        }

        .fs-2 {
            font-size: 2rem;
        }

        .fs-2-2 {
            font-size: 2.2rem;
        }

        .fs-2-3 {
            font-size: 2.3rem;
        }

        .fw-400 {
            font-weight: 400;
        }

        .fw-500 {
            font-weight: 500;
        }

        .fw-600 {
            font-weight: 600;
        }

        .text-right {
            text-align: right;
        }

        .text-left {
            text-align: left;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .bg-teal {
            background-color: #e0e0e0;
        }

        .color-teal {
            color: #15bece;
        }

        .text-white {
            color: #fff;
        }

        .text-dark {
            color: #333;
        }

        .text-center {
            text-align: center;
        }

        .d-flex {
            display: flex;
        }

        .d-block {
            display: block;
        }

        .flex-column {
            flex-direction: column;
        }

        .mb-10 {
            margin-bottom: 1rem;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            margin-top: 1rem;
            border-bottom: none;
            color: #212529;
            border-collapse: collapse;
        }

        .tableview__title {
            margin-top: 1rem;
            font-size: 2.3rem;
            font-weight: 600;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
        }

        .table tbody + tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody + tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary > th,
        .table-primary > td {
            background-color: #b8daff;
        }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody + tbody {
            border-color: #7abaff;
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .table-hover .table-primary:hover > td,
        .table-hover .table-primary:hover > th {
            background-color: #9fcdff;
        }

        .table-secondary,
        .table-secondary > th,
        .table-secondary > td {
            background-color: #d6d8db;
        }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody + tbody {
            border-color: #b3b7bb;
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }

        .table-hover .table-secondary:hover > td,
        .table-hover .table-secondary:hover > th {
            background-color: #c8cbcf;
        }

        .table-success,
        .table-success > th,
        .table-success > td {
            background-color: #c3e6cb;
        }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody + tbody {
            border-color: #8fd19e;
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }

        .table-hover .table-success:hover > td,
        .table-hover .table-success:hover > th {
            background-color: #b1dfbb;
        }

        .table-info,
        .table-info > th,
        .table-info > td {
            background-color: #bee5eb;
        }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody + tbody {
            border-color: #86cfda;
        }

        .table-hover .table-info:hover {
            background-color: #abdde5;
        }

        .table-hover .table-info:hover > td,
        .table-hover .table-info:hover > th {
            background-color: #abdde5;
        }

        .table-warning,
        .table-warning > th,
        .table-warning > td {
            background-color: #ffeeba;
        }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody + tbody {
            border-color: #ffdf7e;
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }

        .table-hover .table-warning:hover > td,
        .table-hover .table-warning:hover > th {
            background-color: #ffe8a1;
        }

        .table-danger,
        .table-danger > th,
        .table-danger > td {
            background-color: #f5c6cb;
        }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody + tbody {
            border-color: #ed969e;
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }

        .table-hover .table-danger:hover > td,
        .table-hover .table-danger:hover > th {
            background-color: #f1b0b7;
        }

        .table-light,
        .table-light > th,
        .table-light > td {
            background-color: #fdfdfe;
        }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody + tbody {
            border-color: #fbfcfc;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover > td,
        .table-hover .table-light:hover > th {
            background-color: #ececf6;
        }

        .table-dark,
        .table-dark > th,
        .table-dark > td {
            background-color: #c6c8ca;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #95999c;
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }

        .table-hover .table-dark:hover > td,
        .table-hover .table-dark:hover > th {
            background-color: #b9bbbe;
        }

        .table-active,
        .table-active > th,
        .table-active > td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover > td,
        .table-hover .table-active:hover > th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .table-dark {
            color: #fff;
            background-color: #343a40;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .table-responsive-sm > .table-bordered {
            border: 0;
        }
        }

        @media (max-width: 767.98px) {
        .table-responsive-md {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        }
        .table-responsive-md > .table-bordered {
        border: 0;
        }
        }

        @media (max-width: 991.98px) {
        .table-responsive-lg {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        }
        .table-responsive-lg > .table-bordered {
        border: 0;
        }
        }

        @media (max-width: 1199.98px) {

            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl > .table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive > .table-bordered {
            border: 0;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive > .table-bordered {
            border: 0;
        }
    </style>
</head>

<body translate="no">
    
    <?php 
    $vendor_name;
    $supplier_email;
    $supplier_address;
    $supplier_contact;
    $sales_person;
    $property_name;
    $property_address;
    foreach($rtems as $item){

        print_r($item);
        $vendor_name = $item->SUPPLIER_NAME;
        $supplier_email = $item->EMAIL;
        $supplier_address = $item->ADDRESS;
        $supplier_contact = $item->CONTACT;
        $sales_person =$item->NAME;
        
    }
    foreach($properties->result() as $property){
        print_r($property);
        $property_name = $property->PROPERTY_NAME;
    }
    ?>
    <div id="app">
        <div class="app__container">
            <table class="table table-bordered">
            <caption class="tableview__title"><?php echo $property_name;?></caption>
                    <tr>
                        <td rowspan="4" colspan="2" class="fs-1-3">
                           <div class="flex flex-column">
                                <p class="mb-10">Company Address: <strong><?php?></strong></p>
                                <p class="mb-10">Phone Number</p>
                                <p class="mb-10">Email Address</p>
                                <p class="mb-10">Website url</p>
                           </div>
                        </td>
                        <td colspan="4">
                            <h3 class="text-right fs-1-7 text-dark">Purchase Order</h3>
                        </td>
                    </tr>
                    
                    <tr>
                        <td class="fs-1-4 fw-600" colspan="1" rowspan="2">Date</td>
                        <td class="fs-1-4" colspan="3" rowspan="2">MM/DD/YYYY</td>
                    </tr>
                    <tr></tr>
                    <tr>
                        
                        <td class="fs-1-4 fw-600" colspan="1">Purchase Order No: </td>
                        <td class="fs-1-4" colspan="3">836754</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="bg-teal">
                        <td class="text-dark fs-1-4 fw-500 text-uppercase" colspan="6">Vendor Information</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th class="text-left fs-1-3">Vendor name</th>
                        <td class="fs-1-3 text-left" colspan="5"><?php echo $vendor_name;?></td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Sales Person</th>
                        <td class="fs-1-3 text-left" colspan="5"><?php echo $sales_person;?></td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Address</th>
                        <td class="fs-1-3 text-left" colspan="5"><?php echo $supplier_address;?></td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Email Address</th>
                        <td class="fs-1-3 text-left" colspan="5"><?php echo $supplier_email;?></td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Contact No.</th>
                        <td class="fs-1-3 text-left" colspan="5"><?php echo $supplier_contact;?></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr class="bg-teal">
                        <td class="text-dark fs-1-4 fw-500 text-uppercase" colspan="6">Customer Information</td>
                    </tr>
                </tbody>
                <tbody>
                <tbody>
                    <tr>
                        <th class="text-left fs-1-3">Customer name</th>
                        <td class="fs-1-3 text-left" colspan="5">Franklin Middle School</td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Sales Person</th>
                        <td class="fs-1-3 text-left" colspan="5">John Smith</td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Address</th>
                        <td class="fs-1-3 text-left" colspan="5">1667 K Street NW, Washington DC   2006</td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Email Address</th>
                        <td class="fs-1-3 text-left" colspan="5">salesperson@heathrow.co.uk</td>
                    </tr>
                    <tr>
                        <th class="fs-1-3 text-left">Contact No.</th>
                        <td class="fs-1-3 text-left" colspan="5">(203) 743-8993</td>
                    </tr>
                </tbody>
                </tbody>
                <tbody>
                    <tr class="bg-teal">
                        <th class="text-dark fs-1-4">Item No.</th>
                        <th class="text-dark fs-1-4">Details</th>
                        <th class="text-dark fs-1-4">Unit</th>
                        <th class="text-dark fs-1-4">Quantity</th>
                        <th class="text-dark fs-1-4">Unit Price</th>
                        <th class="text-dark fs-1-4">Total</th>
                    </tr>
                    <?php 
                    $item_num = 0;
                    $sub_total = 0;
                    $taxes = 0;
                    $total_amount = 0;
                    
                    foreach($rtems as $item){
                        $item_num++;

                        $items_total = $item->QUANTITY * $item->PRICE_UNIT;
                        $sub_total += $items_total;
                        $taxes = ($sub_total * 14) / 100;
                        $total_amount = $sub_total + $taxes;

                        echo '<tr>
                        <td class="fs-1-3 text-center">'.$item_num.'</td>
                        <td class="fs-1-3 text-center">'.$item->PRODUCT_NAME.'</td>
                        <td class="fs-1-3 text-center">'.$item->BUNIT.'</td>
                        <td class="fs-1-3 text-center">'.$item->QUANTITY.'</td>
                        <td class="fs-1-3 text-center">'.number_format($item->PRICE_UNIT,2).'</td>
                        <td class="fs-1-3 text-center">'.number_format($items_total,2).'</td>
                        </tr>
                        
                        ';
                        
                    } 
                 
                    ?>
                    <tbody>
                        <tr>
                            <th colspan="2" class="bg-teal text-dark fs-1-4 fw-500 text-uppercase">Additional Notes</th>
                            <th class="fs-1-3" rowspan="2" colspan="3">Subtotal</th>
                            <th class="fs-1-3" rowspan="2"><?php echo number_format($sub_total,2);?></th>
                        </tr>
                        <tr>
                            <td class="fs-1-3" colspan="2" rowspan="6">Payment shall be 30 days upon delivery of the items and more information</td>
                        </tr>
                        <tr>
                            <td class="fs-1-3">Taxes (%)</td>
                            <td class="fs-1-3">14</td>
                            <td class="text-right fs-1-3" colspan="2"><?php echo number_format($taxes, 2);?></td>
                        </tr>
                        <tr>
                            <td class="fs-1-3">Discount (%)</td>
                            <td class="fs-1-3">0</td>
                            <td class="text-right fs-1-3" colspan="2">0.00</td>
                        </tr>
                        <tr>
                            <th class="fs-1-3">Total</th>
                            <th colspan="3" class="text-right fs-1-3"><?php echo number_format($total_amount, 2);?></th>
                        </tr>
                        <tr>
                            <th colspan="4" class="text-dark bg-teal fs-1-4 fw-500 text-uppercase">Authorized By</th>
                        </tr>
                        <tr>
                            <td colspan="4">Your Signature</td>
                        </tr>
                    </tbody>
                </tbody>
            </table>
        </div>
    </div>


</body>

</html>
