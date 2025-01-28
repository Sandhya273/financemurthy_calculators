<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Copyrights Finance Murthy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #FFFFFF;
            color: white;
            padding: 15px 0;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 30px;
        }

        header .logo {
            max-width: 50px;
            height: auto;
        }

        header nav {
            margin-top: 10px;
        }

        header nav a {
            color: #375481;
            text-decoration: none;
            margin: 0 15px;
            font-size: 1.1em;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        footer {
            background-color: #375481;
            color: #FFFFFF;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button {
            width: 100%;
            padding: 10px;
            background-color: #44A148;
            border: none;
            color: white;
            font-size: 1.1em;
            border-radius: 4px;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            font-size: 0.9em;
        }

        .result-container {
            border: 1px solid #ddd;
            padding: 20px;
            margin-top: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

    </style>
</head>
<body>

    
    <header>
        
        <img src="{{asset('logo/full_logo.jpg')}}" width="100px" alt="Financemurthy Logo"> 
         
        
        <nav>
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Contact Us</a>
            
        </nav>
        </header> 
    

    
    <h1 style="text-align: center; margin-top: 20px;">Fixed Deposit (FD) Calculator</h1>

    
    <div class="form-container">
        <form action="{{ route('calculate') }}" method="POST">
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

    
    <footer>
        <p>&copy; 2025 Copyrights Finance Murthy. All rights reserved.</p>
    </footer>

</body>
</html>
