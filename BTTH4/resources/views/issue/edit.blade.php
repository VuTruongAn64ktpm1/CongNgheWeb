{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <h1>Edit Issue</h1>
    <form action="{{ route('issue.update', $issue->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="computer_id">Máy tính:</label>
            <select name="computer_id" id="computer_id">
                @foreach($computers as $computer)
                    <option value="{{ $computer->id }}" {{ $issue->computer_id == $computer->id ? 'selected' : '' }}>{{ $computer->computer_name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="reported_by">Người báo cáo:</label>
            <input type="text" name="reported_by" id="reported_by" value="{{ $issue->reported_by }}">
        </div>
        <div>
            <label for="reported_date">Ngày báo cáo:</label>
            <input type="datetime-local" name="reported_date" id="reported_date" value="{{ $issue->reported_date }}">
        </div>
        <div>
            <label for="description">Mô tả:</label>
            <textarea name="description" id="description">{{ $issue->description }}</textarea>
        </div>
        <div>
            <label for="urgency">Mức độ:</label>
            <select name="urgency" id="urgency">
                <option value="Low" {{ $issue->urgency == 'Low' ? 'selected' : '' }}>Thấp</option>
                <option value="Medium" {{ $issue->urgency == 'Medium' ? 'selected' : '' }}>Trung bình</option>
                <option value="High" {{ $issue->urgency == 'High' ? 'selected' : '' }}>Cao</option>
            </select>
        </div>
        <div>
            <label for="status">Trạng thái:</label>
            <select name="status" id="status">
                <option value="Open" {{ $issue->status == 'Open' ? 'selected' : '' }}>Mở</option>
                <option value="In Progress" {{ $issue->status == 'In Progress' ? 'selected' : '' }}>Đang xử lý</option>
                <option value="Resolved" {{ $issue->status == 'Resolved' ? 'selected' : '' }}>Đã giải quyết</option>
            </select>
        </div>
        <button type="submit">Cập nhật</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ route('issue.index') }}">Quay lại</a>
{{-- @endsection --}}
