@foreach($product->comments as $comment)
    <div class="reviews">
        <div class="review-item">

            <h4 class="analysis">Loading... <span class="spinner"></span></h4>
            <div class="sentiment-bar">
                <div  class="sentiment-fill"></div>
            </div>
            <span class="text-muted">
                {{$comment->created_at->diffForHumans()}}, from {{$comment->city->name}}, {{$comment->city->country->name}}
            </span>
            <p>
                {{$comment->text}}
            </p>
        </div>
    </div>
@endforeach

<div class="container">
    <h2>Add Comment</h2>
    <form action="{{ route('comments.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="text">Comment:</label>
            <textarea name="text" class="form-control" rows="3" required></textarea>
        </div>
        <div class="form-group">
            <label for="country">Select Country:</label>
            <select name="country" id="country" class="form-control" required>
                <option value="" selected disabled>Select a country</option>
                @foreach($countries as $country)
                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="city">Select City:</label>
            <select name="city_id" id="city" class="form-control" required>
                <option value="" selected disabled>Select a city</option>
            </select>
        </div>

        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script>

    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('country').addEventListener('change', function () {
            var countryId = this.value;
            var citySelect = document.getElementById('city');

            // Clear existing options
            citySelect.innerHTML = '<option value="" selected disabled>Loading cities...</option>';

            // Make AJAX request to fetch cities
            var url = '{{ route("cities",":b_id") }}';
            url1 = url.replace(':b_id', countryId);


            fetch(url1)
                .then(response => response.json())
                .then(data => {
                    // Populate city select with fetched cities
                    citySelect.innerHTML = '<option value="" selected disabled>Select a city</option>';
                    data.forEach(city => {
                        var option = document.createElement('option');
                        option.value = city.id;
                        option.text = city.name;
                        citySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching cities:', error);
                    citySelect.innerHTML = '<option value="" selected disabled>Error loading cities</option>';
                });
        });

        document.querySelectorAll('.review-item').forEach(async function(reviewItem) {
            const commentText = reviewItem.querySelector('p').textContent.trim();
            const analysisElement = reviewItem.querySelector('.analysis');

            const sentimentFillElement = reviewItem.querySelector('.sentiment-fill');

            $.ajax({
                url: '{{ route('comments.analysis') }}',
                type: 'POST', // or 'GET' depending on your route
                data: { comment: commentText },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    console.log(response);
                    const data = JSON.parse(response);

                    if (response ) {
                        analysisElement.textContent = `Sentiment: ${data.sentiment}`;
                        const sentimentColor = calculateSentimentColor(data.sentiment);
                        sentimentFillElement.style.background = `linear-gradient(to right, ${sentimentColor}, green)`;
                    } else {
                        analysisElement.textContent = 'Failed to analyze sentiment: Invalid response format';
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error analyzing sentiment:', error);
                    analysisElement.textContent = 'Failed to analyze sentiment: ' + error.statusText;
                }
            });

        });


        // Function to calculate sentiment color
        function calculateSentimentColor(sentiment) {
            const red = 255 * (1 - sentiment);
            const green = 255 * (1 + sentiment);
            return `rgb(${red}, ${green}, 0)`;
        }

    });
</script>
