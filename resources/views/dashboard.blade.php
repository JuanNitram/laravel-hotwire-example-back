<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        <!-- Welcome Header -->
        <div class="mb-2">
            <h1 class="text-2xl font-semibold text-gray-900">Welcome {{ auth()->user()->name ?? 'Ryan Hayden' }}</h1>
        </div>

        <!-- Action Cards Grid -->
        <div class="flex justify-between gap-2">
            <!-- Clock In -->
            <div class="flex flex-col items-center gap-2 p-4 text-center hover:bg-gray-50 rounded-lg transition-colors cursor-pointer flex-1">
                <div class="w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center">
                    <x-icons.clock class="text-gray-600" />
                </div>
                <span class="text-sm font-medium text-gray-700">Clock In</span>
            </div>

            <!-- Schedule -->
            <div class="flex flex-col items-center gap-2 p-4 text-center hover:bg-gray-50 rounded-lg transition-colors cursor-pointer flex-1">
                <div class="w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center">
                    <x-icons.calendar class="text-gray-600" />
                </div>
                <span class="text-sm font-medium text-gray-700">Schedule</span>
            </div>

            <!-- Pay -->
            <div class="flex flex-col items-center gap-2 p-4 text-center hover:bg-gray-50 rounded-lg transition-colors cursor-pointer flex-1">
                <div class="w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center">
                    <x-icons.dollar class="text-gray-600" />
                </div>
                <span class="text-sm font-medium text-gray-700">Pay</span>
            </div>

            <!-- Benefits -->
            <div class="flex flex-col items-center gap-2 p-4 text-center hover:bg-gray-50 rounded-lg transition-colors cursor-pointer flex-1">
                <div class="w-12 h-12 rounded-lg border-2 border-gray-300 flex items-center justify-center">
                    <x-icons.heart class="text-gray-600" />
                </div>
                <span class="text-sm font-medium text-gray-700">Benefits</span>
            </div>
        </div>

        <!-- New BOPIS Order Notification -->
        <x-card class="p-6">
            <div class="flex flex-col gap-3">
                <h3 class="text-lg font-semibold text-gray-900">New BOPIS Order</h3>
                <p class="text-gray-600">for John Doe</p>
                <ul class="space-y-1 text-gray-700">
                    <li>• 1x Chicken Wire #14567825</li>
                    <li>• 2x Pig Ears #16489754</li>
                </ul>
            </div>
        </x-card>

        <!-- Your Tasks Section -->
        <div class="flex flex-col gap-4">
            <h2 class="text-xl font-semibold text-gray-900">Your Tasks</h2>
            
            <!-- Task 1 -->
            <x-card class="p-6 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h4 class="font-medium text-gray-900">Complete closing checklist</h4>
                    <p class="text-sm text-gray-500">Due today</p>
                </div>
            </x-card>

            <!-- Task 2 -->
            <x-card class="p-6 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h4 class="font-medium text-gray-900">Arrange Christmas Endcap</h4>
                    <p class="text-sm text-gray-500">Due today</p>
                </div>
            </x-card>

            <!-- Task 2 -->
            <x-card class="p-6 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h4 class="font-medium text-gray-900">Arrange Christmas Endcap</h4>
                    <p class="text-sm text-gray-500">Due today</p>
                </div>
            </x-card>

            <!-- Task 2 -->
            <x-card class="p-6 hover:shadow-md transition-shadow cursor-pointer">
                <div class="flex flex-col gap-2">
                    <h4 class="font-medium text-gray-900">Arrange Christmas Endcap</h4>
                    <p class="text-sm text-gray-500">Due today</p>
                </div>
            </x-card>
        </div>
    </div>
</x-layouts.app>
