({
    extendsFrom: 'QuotesCreateView',

    /**
     * @inheritdoc
     */
    bindDataChange: function() {
        this._super('bindDataChange');

        this.model.on('change:billing_account_id', _.bind(function() {
            app.alert.show(name, {
                level: 'warning',
                messages: app.lang.get('ERR_PRICE_LIST_QUOTE_WARNING', 'Quotes')
            });
        }, this), this);
    },
})
