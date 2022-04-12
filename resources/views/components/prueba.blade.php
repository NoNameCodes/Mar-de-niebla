<script src="https://cdn.tailwindcss.com"></script>

<div class="w-full">

    <div class="relative flex">
        <input id="select-role"  >
            @foreach ($users as $user)
                {{-- <option name="user_id" value="{{ $user->id }}">{{ $user->name }}</option> --}}
                <input type="checkbox" checked id="cbox1" value="{{ $user->id }}" name="{{ $user->id }}">
                <label for="{{ $user->id }}">{{ $user->name }}</label>
            @endforeach 
            
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
<script>
    new TomSelect('#select-role', {
        maxItems: 500,
    });
</script>

<style>
    .ts-wrapper.single .ts-control,
    .ts-wrapper.single .ts-control input {
        cursor: pointer;
    }

    .ts-wrapper.plugin-drag_drop.multi>.ts-control>div.ui-sortable-placeholder {
        visibility: visible !important;
        background: #f2f2f2 !important;
        background: rgba(0, 0, 0, 0.06) !important;
        border: 0 none !important;
        box-shadow: inset 0 0 12px 4px #fff;
    }

    .ts-wrapper.plugin-drag_drop .ui-sortable-placeholder::after {
        content: "!";
        visibility: hidden;
    }

    .ts-wrapper.plugin-drag_drop .ui-sortable-helper {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    }

    .plugin-checkbox_options .option input {
        margin-right: 0.5rem;
    }

    .plugin-clear_button .ts-control {
        padding-right: calc(1em + (3 * 6px)) !important;
    }

    .plugin-clear_button .clear-button {
        opacity: 0;
        position: absolute;
        top: 8px;
        right: calc(8px - 6px);
        margin-right: 0 !important;
        background: transparent !important;
        transition: opacity 0.5s;
        cursor: pointer;
    }

    .plugin-clear_button.single .clear-button {
        right: calc(8px - 6px + 2rem);
    }

    .plugin-clear_button.focus.has-items .clear-button,
    .plugin-clear_button:not(.disabled):hover.has-items .clear-button {
        opacity: 1;
    }

    .ts-wrapper .dropdown-header {
        position: relative;
        padding: 10px 8px;
        border-bottom: 1px solid #d0d0d0;
        background: #f8f8f8;
        border-radius: 3px 3px 0 0;
    }

    .ts-wrapper .dropdown-header-close {
        position: absolute;
        right: 8px;
        top: 50%;
        color: #303030;
        opacity: 0.4;
        margin-top: -12px;
        line-height: 20px;
        font-size: 20px !important;
    }

    .ts-wrapper .dropdown-header-close:hover {
        color: black;
    }

    .plugin-dropdown_input.focus.dropdown-active .ts-control {
        box-shadow: none;
        border: 1px solid #d0d0d0;
    }

    .plugin-dropdown_input .dropdown-input {
        border: 1px solid #d0d0d0;
        border-width: 0 0 1px 0;
        display: block;
        padding: 8px 8px;
        box-shadow: none;
        width: 100%;
        background: transparent;
    }

    .ts-wrapper.plugin-input_autogrow.has-items .ts-control>input {
        min-width: 0;
    }

    .ts-wrapper.plugin-input_autogrow.has-items.focus .ts-control>input {
        flex: none;
        min-width: 4px;
    }

    .ts-wrapper.plugin-input_autogrow.has-items.focus .ts-control>input::-webkit-input-placeholder {
        color: transparent;
    }

    .ts-wrapper.plugin-input_autogrow.has-items.focus .ts-control>input::-ms-input-placeholder {
        color: transparent;
    }

    .ts-wrapper.plugin-input_autogrow.has-items.focus .ts-control>input::placeholder {
        color: transparent;
    }

    .ts-dropdown.plugin-optgroup_columns .ts-dropdown-content {
        display: flex;
    }

    .ts-dropdown.plugin-optgroup_columns .optgroup {
        border-right: 1px solid #f2f2f2;
        border-top: 0 none;
        flex-grow: 1;
        flex-basis: 0;
        min-width: 0;
    }

    .ts-dropdown.plugin-optgroup_columns .optgroup:last-child {
        border-right: 0 none;
    }

    .ts-dropdown.plugin-optgroup_columns .optgroup:before {
        display: none;
    }

    .ts-dropdown.plugin-optgroup_columns .optgroup-header {
        border-top: 0 none;
    }

    .ts-wrapper.plugin-remove_button .item {
        display: inline-flex;
        align-items: center;
        padding-right: 0 !important;
    }

    .ts-wrapper.plugin-remove_button .item .remove {
        color: inherit;
        text-decoration: none;
        vertical-align: middle;
        display: inline-block;
        padding: 0 6px;
        border-left: 1px solid #d0d0d0;
        border-radius: 0 2px 2px 0;
        box-sizing: border-box;
        margin-left: 6px;
    }

    .ts-wrapper.plugin-remove_button .item .remove:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .ts-wrapper.plugin-remove_button .item.active .remove {
        border-left-color: #cacaca;
    }

    .ts-wrapper.plugin-remove_button.disabled .item .remove:hover {
        background: none;
    }

    .ts-wrapper.plugin-remove_button.disabled .item .remove {
        border-left-color: white;
    }

    .ts-wrapper.plugin-remove_button .remove-single {
        position: absolute;
        right: 0;
        top: 0;
        font-size: 23px;
    }

    .ts-wrapper {
        position: relative;
    }

    .ts-dropdown,
    .ts-control,
    .ts-control input {
        color: #303030;
        font-family: inherit;
        font-size: 16px;
        line-height: 18px;
        font-smoothing: inherit;
    }

    .ts-control,
    .ts-wrapper.single.input-active .ts-control {
        background: #fff;
        cursor: text;
    }

    .ts-control {
        border: 1px solid #F8981D;
        padding: 12px 12px;
        width: 100%;
        overflow: hidden;
        position: relative;
        z-index: 1;
        box-sizing: border-box;
        box-shadow: none;
        border-radius: 3px;
        display: flex;
        flex-wrap: wrap;
    }

    .ts-wrapper.multi.has-items .ts-control {
        padding: calc(8px - 2px - 0) 8px calc(8px - 2px - 3px - 0);
    }

    .full .ts-control {
        background-color: #fff;
    }

    .disabled .ts-control,
    .disabled .ts-control * {
        cursor: default !important;
    }

    .focus .ts-control {
        box-shadow: none;
    }

    .ts-control>* {
        vertical-align: baseline;
        display: inline-block;
    }

    .ts-wrapper.multi .ts-control>div {
        cursor: pointer;
        margin: 0 3px 3px 0;
        padding: 2px 6px;
        background: #f2f2f2;
        color: #303030;
        border: 0 solid #d0d0d0;
    }

    .ts-wrapper.multi .ts-control>div.active {
        background: #e8e8e8;
        color: #303030;
        border: 0 solid #cacaca;
    }

    .ts-wrapper.multi.disabled .ts-control>div,
    .ts-wrapper.multi.disabled .ts-control>div.active {
        color: #7d7d7d;
        background: white;
        border: 0 solid white;
    }

    .ts-control>input {
        flex: 1 1 auto;
        min-width: 7rem;
        display: inline-block !important;
        padding: 0 !important;
        min-height: 0 !important;
        max-height: none !important;
        max-width: 100% !important;
        margin: 0 !important;
        text-indent: 0 !important;
        border: 0 none !important;
        background: none !important;
        line-height: inherit !important;
        -webkit-user-select: auto !important;
        -moz-user-select: auto !important;
        -ms-user-select: auto !important;
        user-select: auto !important;
        box-shadow: none !important;
    }

    .ts-control>input::-ms-clear {
        display: none;
    }

    .ts-control>input:focus {
        outline: none !important;
    }

    .has-items .ts-control>input {
        margin: 0 4px !important;
    }

    .ts-control.rtl {
        text-align: right;
    }

    .ts-control.rtl.single .ts-control:after {
        left: 15px;
        right: auto;
    }

    .ts-control.rtl .ts-control>input {
        margin: 0 4px 0 -2px !important;
    }

    .disabled .ts-control {
        opacity: 0.5;
        background-color: #fafafa;
    }

    .input-hidden .ts-control>input {
        opacity: 0;
        position: absolute;
        left: -10000px;
    }

    .ts-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        z-index: 10;
        border: 1px solid #d0d0d0;
        background: #fff;
        margin: 0.25rem 0 0 0;
        border-top: 0 none;
        box-sizing: border-box;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        border-radius: 0 0 3px 3px;
    }

    .ts-dropdown [data-selectable] {
        cursor: pointer;
        overflow: hidden;
    }

    .ts-dropdown [data-selectable] .highlight {
        background: rgba(125, 168, 208, 0.2);
        border-radius: 1px;
    }

    .ts-dropdown .option,
    .ts-dropdown .optgroup-header,
    .ts-dropdown .no-results,
    .ts-dropdown .create {
        padding: 5px 8px;
    }

    .ts-dropdown .option,
    .ts-dropdown [data-disabled],
    .ts-dropdown [data-disabled] [data-selectable].option {
        cursor: inherit;
        opacity: 0.5;
    }

    .ts-dropdown [data-selectable].option {
        opacity: 1;
        cursor: pointer;
    }

    .ts-dropdown .optgroup:first-child .optgroup-header {
        border-top: 0 none;
    }

    .ts-dropdown .optgroup-header {
        color: #303030;
        background: #fff;
        cursor: default;
    }

    .ts-dropdown .create:hover,
    .ts-dropdown .option:hover,
    .ts-dropdown .active {
        background-color: #f5fafd;
        color: #495c68;
    }

    .ts-dropdown .create:hover.create,
    .ts-dropdown .option:hover.create,
    .ts-dropdown .active.create {
        color: #495c68;
    }

    .ts-dropdown .create {
        color: rgba(48, 48, 48, 0.5);
    }

    .ts-dropdown .spinner {
        display: inline-block;
        width: 30px;
        height: 30px;
        margin: 5px 8px;
    }

    .ts-dropdown .spinner:after {
        content: " ";
        display: block;
        width: 24px;
        height: 24px;
        margin: 3px;
        border-radius: 50%;
        border: 5px solid #d0d0d0;
        border-color: #d0d0d0 transparent #d0d0d0 transparent;
        animation: lds-dual-ring 1.2s linear infinite;
    }

    @keyframes lds-dual-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .ts-dropdown-content {
        overflow-y: auto;
        overflow-x: hidden;
        max-height: 200px;
        overflow-scrolling: touch;
        scroll-behavior: smooth;
    }

    .ts-hidden-accessible {
        border: 0 !important;
        clip: rect(0 0 0 0) !important;
        -webkit-clip-path: inset(50%) !important;
        clip-path: inset(50%) !important;
        overflow: hidden !important;
        padding: 0 !important;
        position: absolute !important;
        width: 1px !important;
        white-space: nowrap !important;
    }

</style>