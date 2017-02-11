<div>
    <div ngf-select="" 
         ngf-drop="upload(file, '<?= 'form.'.$config->name ?>')"
   ng-model="file" 
   ngf-multiple="false"
   ngf-pattern="image/*,application/pdf" 
   accept="image/*,application/pdf"
   ng-disabled="false" ngf-capture="capture" ngf-drag-over-class="{accept:'dragover', reject:'dragover-err', delay:100}"
   ngf-keep="true" ngf-keep-distinct="true" ngf-allow-dir="true" class="drop-box "
    ngf-drop-available="dropAvailable">
             <span ng-show="applicationType.file" class="ng-hide">Change Select File</span>
             <span ng-hide="applicationType.file" class="">Select File</span>
            <span ng-show="dropAvailable" class="" style=""></span>
        </div>
    <input type='hidden' ng-model='<?= 'form.'.$config->name ?>' />
</div>