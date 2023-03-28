@extends('user.layout')

@section('content')

<section id="pengumuman" class="py-24  bg-white">
    <div class="container" data-aos="fade-up"   data-aos-duration="500">
        <div class="w-full px-4">
                <div class="mx-auto text-center mb-8">
                    <h4 class="font-semibold uppercase text-primary text-lg mb-2 sm:text-3xl lg:text-4xl">
                        Pengumuman
                    </h4>
                    <p class="font-medium text-md text-secondary md:text-lg selection:bg-teal-500 selection:text-white">
                        Pengumuman tes toefl pada tanggal 16 - 30 maret 2022 IAIN Fatmawati bengkulu
                    </p>
                </div>

                <div class="px-4  shadow-lg sm:rounded-lg mb-4">
                <table id="example" class="w-full text-sm text-left text-gray-500 dark:text-gray-400 " 
                    style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                    <tr>
                        <th data-priority="1">Name</th>
                        <th data-priority="2">Position</th>
                        <th data-priority="3">Office</th>
                        <th data-priority="4">Age</th>
                        <th data-priority="5">Start date</th>
                        <th data-priority="6">Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Michael Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                    </tr>
                    <tr>
                        <td>Donna Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                    </tr>
                    </tbody>
            
                </table>


                </div>
        </div>   
    </div>
</section>
    
@endsection