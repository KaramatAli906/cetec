({
    extendsFrom: 'QuotesRecordView',

    /**
     * @inheritdoc
     */
    initialize: function(options) {
        this._super('initialize', [options]);

        this.model.on('data:sync:complete', _.bind(this.bindDealerChange, this), this);

    },

    /**
     * @inheritdoc
     */
    bindDealerChange: function() {
        this.model.on('change:billing_account_id', _.bind(function() {
            app.alert.show(name, {
                level: 'warning',
                messages: app.lang.get('ERR_PRICE_LIST_QUOTE_WARNING', 'Quotes')
            });
        }, this), this);
    },
})
