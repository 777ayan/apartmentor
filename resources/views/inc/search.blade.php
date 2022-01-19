

<section>
    
    <form action="{{ route('search')}} " method="GET">

                <input type="text" name="city" style="width:200px; height:40px; text-align:center; margin:0px 20px;" placeholder="Enter City or State">
                
            


                <select name="type" style="width:150px; height:30px; padding:0px 10px;margin:0px 20px;">
                    <option value="" disabled selected>Choose Type</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                </select>
            

            
                <select name="purpose" style="width:150px; height:30px; padding:0px 10px;margin:0px 20px;">
                    <option value="" disabled selected>Purpose</option>
                    <option value="rent">Rent</option>
                    <option value="sale">Sale</option>
                </select>

            
                <input type="text" name="maxprice" style="width:200px; height:40px; text-align:center;margin:0px 20px;" placeholder="Maximum Price">
            
                <p><button type="submit" style="width:150px; height:30px; padding:0px 10px;margin:0px 20px;">
                    SEARCH
                </button></p>
            

    </form>

</section>