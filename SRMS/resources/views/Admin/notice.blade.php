<!DOCTYPE html>
<html>
<head>
    <title>Notice Board</title>
    <style>
        .notice-card {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Admin Notice Board</h1>

    <!-- Form for publishing a new notice -->
    <form action="{{ route('admin.notice.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="to">To:</label>
            <input type="text" id="to" name="to" required>
        </div>
        <div>
            <label for="from">From:</label>
            <input type="text" id="from" name="from" required>
        </div>
        <div>
            <label for="through">Through:</label>
            <input type="text" id="through" name="through" required>
        </div>
        <div>
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div>
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
        </div>
        <button type="submit">Publish Notice</button>
    </form>

    <!-- Display all notices -->
    <h2>Published Notices</h2>
    @foreach($notices as $notice)
        <div class="notice-card">
            <h3>{{ $notice->title }} by {{ $notice->from }} - {{ $notice->date->format('l, d F Y, h:i A') }}</h3>
            <p><strong>TO:</strong> {{ $notice->to }}</p>
            <p><strong>FROM:</strong> {{ $notice->from }}</p>
            <p><strong>THROUGH:</strong> {{ $notice->through }}</p>
            <p><strong>SUBJECT:</strong> {{ $notice->subject }}</p>
            <p>{!! nl2br(e($notice->content)) !!}</p>
        </div>
    @endforeach
</body>
</html>
