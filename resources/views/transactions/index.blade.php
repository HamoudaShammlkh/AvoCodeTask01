<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Transactions </h1>
            <table class="table table-bordered table-hover mt-3">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Desciption</th>
                    <th scope="col">Price</th>
                </tr>
                </thead>
                <tbody>
                <?php  $i=1;?>
                @foreach($transactions as $transaction)
                    <tr>
                    <th scope="row"><?php echo $i;$i++;?></th>
                    <td>{{$transaction->product_name}}</td>
                    <td>{{$transaction->product_description}}</td>
                    <td>{{$transaction->product_price}}</td>
                </tr>
                @endforeach


                </tbody>
            </table>
            <a href="{{route('transactionsexport')}}" class="btn btn-info">Export as Excell
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" height="15px">
<g>
    <path style="fill:#4CAF50;" d="M294.656,13.014c-2.531-2.056-5.863-2.842-9.045-2.133l-277.333,64
		C3.397,76.003-0.047,80.369,0,85.377v362.667c0.002,5.263,3.843,9.739,9.045,10.539l277.333,42.667
		c5.823,0.895,11.269-3.099,12.164-8.921c0.082-0.535,0.124-1.076,0.124-1.617V21.377C298.676,18.124,297.199,15.045,294.656,13.014
		z"/>
    <path style="fill:#4CAF50;" d="M501.334,458.71H288c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667
		h202.667V74.71H288c-5.891,0-10.667-4.776-10.667-10.667S282.109,53.377,288,53.377h213.333c5.891,0,10.667,4.776,10.667,10.667
		v384C512,453.935,507.225,458.71,501.334,458.71z"/>
</g>
                    <g>
                        <path style="fill:#FAFAFA;" d="M202.667,352.044c-3.678,0-7.096-1.895-9.045-5.013L86.955,176.364
		c-3.279-4.894-1.969-11.52,2.925-14.799s11.52-1.969,14.799,2.925c0.129,0.192,0.251,0.388,0.367,0.588l106.667,170.667
		c3.11,5.003,1.576,11.58-3.427,14.691C206.599,351.484,204.653,352.041,202.667,352.044z"/>
                        <path style="fill:#FAFAFA;" d="M96,352.044c-5.891-0.012-10.657-4.797-10.645-10.688c0.004-1.992,0.566-3.943,1.621-5.632
		l106.667-170.667c2.954-5.097,9.481-6.834,14.577-3.88c5.097,2.954,6.834,9.481,3.88,14.577c-0.116,0.2-0.238,0.396-0.367,0.588
		L105.067,347.009C103.119,350.142,99.69,352.047,96,352.044z"/>
                    </g>
                    <g>
                        <path style="fill:#4CAF50;" d="M373.334,458.71c-5.891,0-10.667-4.776-10.667-10.667v-384c0-5.891,4.776-10.667,10.667-10.667
		c5.891,0,10.667,4.776,10.667,10.667v384C384,453.935,379.225,458.71,373.334,458.71z"/>
                        <path style="fill:#4CAF50;" d="M501.334,394.71H288c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667
		h213.333c5.891,0,10.667,4.776,10.667,10.667C512,389.935,507.225,394.71,501.334,394.71z"/>
                        <path style="fill:#4CAF50;" d="M501.334,330.71H288c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667
		h213.333c5.891,0,10.667,4.776,10.667,10.667C512,325.935,507.225,330.71,501.334,330.71z"/>
                        <path style="fill:#4CAF50;" d="M501.334,266.71H288c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667
		h213.333c5.891,0,10.667,4.776,10.667,10.667C512,261.935,507.225,266.71,501.334,266.71z"/>
                        <path style="fill:#4CAF50;" d="M501.334,202.71H288c-5.891,0-10.667-4.776-10.667-10.667s4.776-10.667,10.667-10.667h213.333
		c5.891,0,10.667,4.776,10.667,10.667S507.225,202.71,501.334,202.71z"/>
                        <path style="fill:#4CAF50;" d="M501.334,138.71H288c-5.891,0-10.667-4.776-10.667-10.667c0-5.891,4.776-10.667,10.667-10.667
		h213.333c5.891,0,10.667,4.776,10.667,10.667C512,133.935,507.225,138.71,501.334,138.71z"/>
                    </g>

</svg>
            </a>
{{--            <div>Icons made by <a href="https://www.flaticon.com/authors/pixel-perfect" title="Pixel perfect">Pixel perfect</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>--}}
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
