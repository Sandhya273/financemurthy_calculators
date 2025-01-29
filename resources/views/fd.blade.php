@include('header')
@include('footer') 

    

    
    <h1 style="text-align: center; margin-top: 20px;">Fixed Deposit (FD) Calculator</h1>

    
    <div class="form-container">
        <form action="{{ route('fdCalculator') }}" method="POST">
            @csrf
            <div>
                <label for="investment">Total Investment (₹):</label>
                <input type="number" name="investment" id="investment" value="{{ old('investment') }}" placeholder="Enter investment amount" required>
                @error('investment') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="rate">Rate of Interest (%):</label>
                <input type="number" name="rate" id="rate" value="{{ old('rate') }}" placeholder="Enter interest rate" required>
                @error('rate') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="time">Time Period (Years):</label>
                <input type="number" name="time" id="time" value="{{ old('time') }}" placeholder="Enter time in years" required>
                @error('time') <span class="error">{{ $message }}</span> @enderror
            </div>

            <button type="submit">Calculate</button>
        </form>

        @if (isset($simpleInterest))
            <div class="result-container">
                <h2>Result:</h2>
                <p><strong>Simple Interest:</strong> ₹{{ number_format($simpleInterest, 2) }}</p>
                <p><strong>Total Amount:</strong> ₹{{ number_format($totalAmount, 2) }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="error">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    


</body>
</html>
