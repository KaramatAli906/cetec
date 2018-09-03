({
    extendsFrom: 'QuotesCurrencyField',

    format: function(value) {
        if (this.view.name === 'quote-data-grand-totals-footer') {
            var number_grouping_separator = app.user.getPreference('number_grouping_separator') || ',';
            var decimal_separator = app.user.getPreference('decimal_separator') || '.';

            return app.utils.formatNumber(
                value,
                2,
                2,
                number_grouping_separator,
                decimal_separator
            );
        }

        return this._super('format', [value]);
    }
})
