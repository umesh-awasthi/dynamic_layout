@extends('layouts.admin')

@section('content')
    <div class="flex min-h-screen bg-gray-100">
        <main class="flex-1 p-6">
            <h1 class="text-2xl font-semibold mb-6">Layout Settings</h1>

            @if (session('success'))
                <div class="mb-4 text-green-600 font-semibold">
                    {{ session('success') }}
                </div>
            @endif

            <form action="" method="POST" class="bg-white p-6 rounded shadow-md max-w-3xl space-y-8">
                @csrf


                {{-- Layout Section: Header --}}
                <div>
                    <h2 class="text-xl font-semibold mb-4">Header Layout</h2>
                   
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block font-medium mb-1">Height</label>
                            <input type="number" name="header[height]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['header']['height'] ?? '' }}" placeholder="e.g. 80px" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Padding</label>
                            <input type="number" name="header[padding]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['header']['padding'] ?? '' }}" placeholder="e.g. 10px" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Background Color</label>
                            <input type="text" name="header[background]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['header']['background'] ?? '' }}" placeholder="e.g. #ffffff" />
                        </div>
                    </div>
                </div>
                {{-- Layout Section: Category --}}
                <div>
                    <h2 class="text-xl font-semibold mb-4">Category Layout</h2>
                   
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block font-medium mb-1">Grid</label>
                            <input type="number" name="category[grid]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['category']['grid'] ?? '' }}" placeholder="e.g. 100%" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Padding</label>
                            <input type="number" name="category[padding]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['category']['padding'] ?? '' }}" placeholder="e.g. 20px" />
                        </div>
                        
                    </div>
                </div>

                {{-- Layout Section: Deal Card --}}
                <div>
                    <h2 class="text-xl font-semibold mb-4">Deal Card Layout</h2>
                   
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block font-medium mb-1">Card Width</label>
                            <input type="number" name="deal_card[width]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['deal_card']['width'] ?? '' }}" placeholder="e.g. 300px" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Padding</label>
                            <input type="number" name="deal_card[padding]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['deal_card']['padding'] ?? '' }}" placeholder="e.g. 10px" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Margin</label>
                            <input type="number" name="deal_card[margin]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['deal_card']['margin'] ?? '' }}" placeholder="e.g. 15px" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Background Color</label>
                            <input type="text" name="deal_card[background]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['deal_card']['background'] ?? '' }}" placeholder="e.g. #ffffff" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Border Radius</label>
                            <input type="number" name="deal_card[border_radius]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['deal_card']['border_radius'] ?? '' }}" placeholder="e.g. 8px" />
                        </div>

                        <div>
                            <label class="block font-medium mb-1">Text Image Position</label>
                            <select name="deal_card[text_image_position]" class="w-full border rounded px-3 py-2">
                                <option value="ltr" {{ ($data['deal_card']['text_image_position'] ?? '') === 'ltr' ? 'selected' : '' }}>Left to Right</option>
                                <option value="rtl" {{ ($data['deal_card']['text_image_position'] ?? '') === 'rtl' ? 'selected' : '' }}>Right to Left</option>
                            </select>
                        </div>
                        
                    </div>
                </div>




                {{-- Layout Section: Footer --}}
                <div>
                    <h2 class="text-xl font-semibold mb-4">Footer Layout</h2>
                   
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label class="block font-medium mb-1">Height</label>
                            <input type="number" name="footer[height]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['footer']['height'] ?? '' }}" placeholder="e.g. 100px" />
                        </div>
                        <div>
                            <label class="block font-medium mb-1">Text Padding</label>
                            <input type="number" name="footer[text_padding]" class="w-full border rounded px-3 py-2"
                                value="{{ $data['footer']['text_padding'] ?? '' }}" placeholder="e.g. 15px" />
                        </div>
                      
                    </div>
                </div>

                <button type="submit" class="mt-6 bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
                    Save All Settings
                </button>
            </form>
        </main>
    </div>
@endsection
