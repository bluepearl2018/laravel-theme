<div class="break-inside-avoid-column">
	<x-dynamic-component
			:component="'theme-form-'.$specs[0].'-'.$specs[1]"
			:specs="$specs"
			:old="old($columnName)"
			:columnName="$columnName"
	></x-dynamic-component>
</div>