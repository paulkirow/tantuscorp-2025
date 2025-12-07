@php
    $hasDropdown = isset($item['dropdown']);
    $hasMega = isset($item['dropdown'][0]['mega']) && $item['dropdown'][0]['mega'] === true;
@endphp

<li class="nav-item {{ $hasDropdown ? 'dropdown' : '' }} {{ $hasMega ? 'dropdown-mega' : '' }}">
    <a
        href="{{ $hasDropdown ? '#' : ($item['url'] ?? '#') }}"
        class="nav-link {{ $hasDropdown ? 'dropdown-toggle' : '' }}"
        @if($hasDropdown)
            id="dropdown-{{ \Illuminate\Support\Str::slug($item['title']) }}"
        role="button"
        data-bs-toggle="dropdown"
        data-bs-display="static"
        data-bs-auto-close="outside"
        aria-expanded="false"
        aria-haspopup="true"
        @endif
    >
        {!! $item['title'] !!}
        @if(isset($item['badge']))
            <span class="badge bg-dark ms-1">{{ $item['badge'] }}</span>
        @endif
    </a>

    @if($hasDropdown)
        <ul class="dropdown-menu" aria-labelledby="dropdown-{{ \Illuminate\Support\Str::slug($item['title']) }}">
            @if($hasMega)
                <li>
                    <div class="dropdown-mega-content p-3">
                        <div class="row">
                            @foreach($item['dropdown'][0]['content'] as $column)
                                <div class="col-lg-3">
                                    <h6 class="dropdown-header">{{ $column['title'] }}</h6>
                                    @foreach($column['items'] as $subItem)
                                        <a class="dropdown-item" href="{{ $subItem['url'] }}">
                                            {!! $subItem['title'] !!}
                                            @if(isset($subItem['badge']))
                                                <span class="badge bg-dark ms-1">{{ $subItem['badge'] }}</span>
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </li>
            @else
                @foreach($item['dropdown'] as $subItem)
                    <li>
                        <a class="dropdown-item" href="{{ $subItem['url'] }}">
                            {!! $subItem['title'] !!}
                            @if(isset($subItem['badge']))
                                <span class="badge bg-dark ms-1">{{ $subItem['badge'] }}</span>
                            @endif
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    @endif
</li>
